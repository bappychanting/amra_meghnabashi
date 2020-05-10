<?php

namespace App\Http\Controllers\Admin;

use Base\Request; 
use App\Models\Project; 
use App\Http\Controllers\Controller; 

class ProjectController extends Controller
{

    private $project;
    private $request;

    public function __construct() {
        $this->guard('CheckAuth');
        $this->project = new Project;
        $this->request = new Request;  
    }

    public function index() 
    {
        $projects = $this->project->getAllProjects();
        return $this->view('admin.projects.index', compact('projects'));
    }

    public function create() 
    {
        return $this->view('admin.projects.create');
    }

    public function store() 
    {
        $store = $this->project->setData($_POST)->store();
        if($store){
            $this->request->setFlash(['success' => locale('message', 'success')]);
            $this->redirect('admin/projects/all');
        }
        else{
            $this->redirect(back());
        }
    }

    public function edit() 
    {
        $project = $this->project->setData($_GET)->getProject();
        return $this->view('admin.projects.edit', compact('project'));  
    }

    public function update() 
    {
        $update = $this->project->setData($_POST)->update();
        if($update){
            $this->request->setFlash(['success' => locale('message', 'success')]);
            $this->redirect('admin/projects/all');
        }
        else{
            $this->redirect(back());
        }
    }

    public function delete() 
    { 
        $delete = $this->project->setData($_POST)->delete();
        if($delete){
            $this->request->setFlash(['success' => locale('message', 'success')]);
            $this->redirect('admin/projects/all');
        }
        else{
            $this->request->setFlash(['danger' => locale('message', 'danger')]);
            $this->redirect(back());
        }  
    }

}