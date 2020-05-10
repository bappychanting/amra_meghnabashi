<?php

namespace App\Http\Controllers\Admin; 

use Base\Request; 
use App\Models\Admin\Auth; 
use App\Models\Admin\User; 
use App\Http\Controllers\Controller; 

class UserController extends Controller
{
    private $user; 
    private $auth;
    private $request; 

    public function __construct() {
        $this->guard('CheckAuth');
        $this->auth = new Auth;
        $this->user = new User;
        $this->request = new Request; 
    }

    public function index() 
    {
        $auth_user = $this->auth->getAuth(); 
        $users = $this->user->getUsers();
        return $this->view('admin.users.index', compact('users', 'auth_user'));
    }

    public function create() 
    { 
        return $this->view('admin.users.create');
    }

    public function store() 
    {
        $store = $this->user->setData($_POST)->validateData()->storeUser();
        if($store){
            $this->request->setFlash(['success' => "New user has been added!"]);
            $this->redirect('admin/users/all');
        }
        $this->redirect(back());
    }

    public function show() 
    { 
        $user = $this->user->setData($_GET)->getUser();
        return $this->view('admin.users.show', compact('user'));
    }

    public function edit() 
    {
        $user = $this->user->setData($_GET)->getUser();
        return $this->view('admin.users.edit', compact('user'));
    }

    public function update() 
    {
        $update = $this->user->setData($_POST)->validateData()->updateUser();
        if($update){
            $this->request->setFlash(['success' => "User has beed updated!"]);
            $this->redirect('admin/users/show', ['id' => $_POST['id']]);
        }
        else{
            $this->redirect(back());
        }
    }

    public function editPassword() 
    { 
        $user = $this->user->setData($_GET)->getUser();
        return $this->view('admin.users.edit_pass', compact('user'));
    }

    public function updatePassword() 
    {
        $update = $this->auth->setData($_POST)->validateData()->updatePass();
        if($update){
            $this->request->setFlash(['success' => "Password has beed updated!"]);
            $this->redirect('admin/users/show', ['id' => $_POST['id']]);
        }
        else{
            $this->redirect(back());
        }
    }

    public function delete() 
    {
        $delete = $this->user->setData($_POST)->deleteUser();
        if($delete){
            $this->request->setFlash(['success' => locale('message', 'success')]);
            $this->redirect('admin/users/all');
        }
        else{
            $this->request->setFlash(['danger' => locale('message', 'danger')]);
            $this->redirect(back());
        }  
        
    }

}