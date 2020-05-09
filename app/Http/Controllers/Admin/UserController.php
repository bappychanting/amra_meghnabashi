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
        return $this->view('admin.home');
    }

    public function create() 
    {
        $this->guard('CheckGuest');  
        return $this->view('admin.auth.register');
    }

    public function store() 
    {
        $store = $this->user->setData($_POST)->validateData()->storeUser();
        if($store){
            $this->request->setFlash(['success' => "You have now been registered!"]);
            $this->redirect('signin');
        }
        $this->redirect(back());
    }

    public function show() 
    { 
        $auth_user = $this->auth->getAuth(); 
        $user = $this->user->setData((array) $auth_user)->getUser();
        return $this->view('admin.user.show', compact('user'));
    }

    public function edit() 
    {
        $auth_user = $this->auth->getAuth(); 
        $user = $this->user->setData((array) $auth_user)->getUser();
        return $this->view('admin.user.edit', compact('user'));
    }

    public function editPassword() 
    { 
        $auth_user = $this->auth->getAuth(); 
        $user = $this->user->setData((array) $auth_user)->getUser();
        return $this->view('admin.user.edit_pass', compact('user'));
    }

    public function update() 
    {
        $update = $this->user->setData($_POST)->validateData()->updateUser();
        if($update){
            $this->request->setFlash(['success' => "User has beed updated!"]);
            $this->redirect('user/show');
        }
        else{
            $this->redirect(back());
        }
    }

    public function updatePassword() 
    {
        $this->auth->setId($_POST['id']);
        $this->auth->setPassword($_POST['auth_pass']);
        $check = $this->auth->passVerify();
        if($check){
            $update = $this->auth->setData($_POST)->validateData()->updatePass();
        }
        if($update){
            $this->request->setFlash(['success' => "Password has beed updated!"]);
            $this->redirect('user/show');
        }
        else{
            $this->request->setFlash(['danger' => "Password could not be updated! Please try again!"]);
            $this->redirect(back());
        }
    }

    public function delete() 
    {
        
    }

}