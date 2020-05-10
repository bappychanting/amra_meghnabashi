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
        $newses = $this->news->getAllNewses();
        return $this->view('admin.news.index', compact('newses'));
    }

    public function create() 
    {
        $auth_user = $this->auth->getAuth(); 
        return $this->view('admin.news.create', compact('auth_user'));
    }

    public function store() 
    {
        $store = $this->news->setData($_POST)->store();
        if($store){
            $this->request->setFlash(['success' => locale('message', 'success')]);
            $this->redirect('admin/news/all');
        }
        else{
            $this->redirect(back());
        }
    }

    public function edit() 
    {
        $news = $this->news->setData($_GET)->getNews();
        return $this->view('admin.news.edit', compact('news'));  
    }

    public function update() 
    {
        $update = $this->news->setData($_POST)->update();
        if($update){
            $this->request->setFlash(['success' => locale('message', 'success')]);
            $this->redirect('admin/news/all');
        }
        else{
            $this->redirect(back());
        }
    }

    public function delete() 
    { 
        $delete = $this->news->setData($_POST)->delete();
        if($delete){
            $this->request->setFlash(['success' => locale('message', 'success')]);
            $this->redirect('admin/news/all');
        }
        else{
            $this->request->setFlash(['danger' => locale('message', 'danger')]);
            $this->redirect(back());
        }  
    }

}