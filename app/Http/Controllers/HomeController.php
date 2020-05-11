<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function welcome() 
    {
        return $this->view('welcome');
    }

    public function members() 
    {
        return $this->view('members');
    }

    public function projects() 
    {
        return $this->view('projects');
    }

    public function news() 
    {
        return $this->view('news');
    }

    public function error() 
    {
        $this->abort(404);
    }

}