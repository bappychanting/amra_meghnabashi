<?php

namespace App\Http\Controllers\Admin;

use Base\Request; 
use App\Models\User\Auth; 
use App\Models\News; 
use App\Http\Controllers\Controller; 

class NewsController extends Controller
{

    private $item;
    private $auth;
    private $request;

    public function __construct() {
        $this->guard('CheckAuth');
        $this->item = new News;
        $this->auth = new Auth;
        $this->request = new Request;  
    }

    public function index() 
    {
        $auth_user = $this->auth->getAuth(); 
        $this->item->setUser($auth_user->id);
        $items = $this->item->getItems();
        return $this->view('admin.items.index', compact('items'));
    }

    public function create() 
    {
        $auth_user = $this->auth->getAuth(); 
        return $this->view('admin.items.create', compact('auth_user'));
    }

    public function store() 
    {
        $store = $this->item->setData($_POST)->validateData()->storeItem();
        if($store){
            $this->request->destroy('post');
            $this->request->setFlash(['success' => locale('message', 'success')]);
            $this->redirect('items/show', ['id' => $this->item->getLastId()]);
        }
        else{
            $this->redirect(back());
        }
    }

    public function show() 
    {
        $item = $this->item->setData($_GET)->getItem();
        return $this->view('admin.items.show', compact('item'));  
    }

    public function edit() 
    {
        $item = $this->item->setData($_GET)->getItem();
        return $this->view('admin.items.edit', compact('item'));  
    }

    public function update() 
    {
        $update = $this->item->setData($_POST)->validateData()->updateItem();
        if($update){
            $this->request->destroy('post');
            $this->request->setFlash(['success' => locale('message', 'success')]);
            $this->redirect('items/show', ['id' => $_POST['id']]);
        }
        else{
            $this->redirect(back());
        }
    }

    public function delete() 
    { 
        $delete = $this->item->setData($_POST)->deleteItem();
        if($delete){
            $this->request->setFlash(['success' => locale('message', 'success')]);
            $this->redirect('items/all');
        }
        else{
            $this->request->setFlash(['danger' => locale('message', 'danger')]);
            $this->redirect(back());
        }  
    }

}