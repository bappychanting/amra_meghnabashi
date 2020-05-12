<?php

namespace App\Http\Controllers\Admin;

use Base\Request; 
use App\Models\Auth; 
use App\Models\Content; 
use App\Http\Controllers\Controller; 

class WebController extends Controller
{

    private $auth;
    private $content;
    private $request;

    public function __construct() {
        $this->guard('CheckAuth');
        $this->auth = new Auth;
        $this->content = new Content;
        $this->request = new Request;  
    }

    public function index() 
    {
        $this->content->setId(1);
        $content = $this->content->getWebContent();
        $content = json_decode($content['content'], true);
        return $this->view('admin.contents', compact('content'));
    }

    public function update() 
    {
        $this->content->setId(1);
        $this->content->setContent($_POST['content']);
        $update = $this->content->update();
        if($update){
            $this->request->setFlash(array('success' => "Web content has been updated!"));
            $this->redirect(back());
        }
        else{
            $this->request->setFlash(array('danger' => "Web content could not be updated!"));
            $this->redirect(back());
        }
    }

}