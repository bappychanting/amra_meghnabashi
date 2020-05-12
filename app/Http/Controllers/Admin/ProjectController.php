<?php

namespace App\Http\Controllers\Admin;

use Base\Request; 
use App\Models\Project; 
use App\Models\Donation; 
use App\Http\Controllers\Controller; 

class ProjectController extends Controller
{

    private $project;
    private $donation;
    private $request;

    public function __construct() {
        $this->guard('CheckAuth');
        $this->project = new Project;
        $this->donation = new Donation;
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
            $this->notifySubscibers($_POST['name'], route('projects/show', ['id' => $this->project->getLastId()]));
            $this->request->setFlash(['success' => locale('message', 'success')]);
            $this->redirect('admin/projects/all');
        }
        else{
            $this->redirect(back());
        }
    }

    public function show() 
    {
        $project = $this->project->setData($_GET)->getProject();
        $this->donation->setProject($project['id']);
        $donations = $this->donation->getProjectDonations();
        return $this->view('admin.projects.show', compact('project', 'donations'));  
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
            $this->redirect('admin/projects/show', ['id' => $_POST['id']]);
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

    private function notifySubscibers($title, $link){
        $subscribers = $this->get_subscribers();
        $subject = 'Amra Meghnabashi: Please checkout our latest project!';
        $body = 'Our new project is called "<b>'.$title.'</b>"! Please click on <a href="'.$link.'">this link</a> to checkout our latest project!';
        $body .= '<br><b>Regards</b><br>Amra Meghnabashi';
        $this->sendMail($subscribers, $subject, $body);
    }

}