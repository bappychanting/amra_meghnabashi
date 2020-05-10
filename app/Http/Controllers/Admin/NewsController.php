<?php

namespace App\Http\Controllers\Admin;

use Base\Request; 
use App\Models\Auth; 
use App\Models\News; 
use App\Http\Controllers\Controller; 

class NewsController extends Controller
{

    private $news;
    private $auth;
    private $request;

    public function __construct() {
        $this->guard('CheckAuth');
        $this->news = new News;
        $this->auth = new Auth;
        $this->request = new Request;  
    }

    public function index() 
    {
        $auth_user = $this->auth->getAuth(); 
        $newses = $this->news->getAllNewses();
        return $this->view('admin.news.index', compact('newses'));
    }

    public function create() 
    {
        $auth_user = $this->auth->getAuth(); 
        return $this->view('admin.newss.create', compact('auth_user'));
    }

    public function store() 
    {
        $store = $this->news->setData($_POST)->validateData()->storenews();
        if($store){
            $this->request->destroy('post');
            $this->request->setFlash(['success' => locale('message', 'success')]);
            $this->redirect('newss/show', ['id' => $this->news->getLastId()]);
        }
        else{
            $this->redirect(back());
        }
    }

    public function show() 
    {
        $news = $this->news->setData($_GET)->getnews();
        return $this->view('admin.newss.show', compact('news'));  
    }

    public function edit() 
    {
        $news = $this->news->setData($_GET)->getnews();
        return $this->view('admin.newss.edit', compact('news'));  
    }

    public function update() 
    {
        $update = $this->news->setData($_POST)->validateData()->updatenews();
        if($update){
            $this->request->destroy('post');
            $this->request->setFlash(['success' => locale('message', 'success')]);
            $this->redirect('newss/show', ['id' => $_POST['id']]);
        }
        else{
            $this->redirect(back());
        }
    }

    public function delete() 
    { 
        $delete = $this->news->setData($_POST)->deletenews();
        if($delete){
            $this->request->setFlash(['success' => locale('message', 'success')]);
            $this->redirect('newss/all');
        }
        else{
            $this->request->setFlash(['danger' => locale('message', 'danger')]);
            $this->redirect(back());
        }  
    }

}