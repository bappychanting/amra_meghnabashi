<?php

namespace App\Http\Controllers\Admin;

use Base\Request; 
use App\Models\Member; 
use App\Models\Project; 
use App\Models\Donation; 
use App\Http\Controllers\Controller; 

class MemberController extends Controller
{
    private $member;
    private $donation;
    private $request;

    public function __construct() {
        $this->guard('CheckAuth');
        $this->member = new Member;
        $this->donation = new Donation;
        $this->request = new Request;  
    }

    public function index() 
    {
        $members = $this->member->getAllMembers();
        return $this->view('admin.members.index', compact('members'));
    }

    public function create() 
    {
        return $this->view('admin.members.create');
    }

    public function store() 
    {
        $store = $this->member->setData($_POST)->store();
        if($store){
            $this->request->setFlash(['success' => locale('message', 'success')]);
            $this->redirect('admin/members/all');
        }
        else{
            $this->redirect(back());
        }
    }

    public function show() 
    {
        $member = $this->member->setData($_GET)->getMember();
        $project = new Project;
        $projects = $project->getAllProjects();
        $this->donation->setMember($member['id']);
        $donations = $this->donation->getMemberDonations();
        return $this->view('admin.members.show', compact('member', 'donations', 'projects')); 
    }

    public function addDonation() 
    {
        $store = $this->donation->setData($_POST)->store();
        if($store){
            $this->request->setFlash(['success' => locale('message', 'success')]);
            $this->redirect('admin/members/show', ['id' => $_POST['member_id']]);
        }
        else{
            $this->request->setFlash(['danger' => locale('message', 'danger')]);
           
        }
    }

    public function deleteDonation() 
    {
        $delete = $this->donation->setData($_POST)->delete();
        if($delete){
            $this->request->setFlash(['success' => locale('message', 'success')]);
            $this->redirect('admin/members/show', ['id' => $_POST['member_id']]);
        }
        else{
            $this->redirect(back());
        }
    }

    public function edit() 
    {
        $member = $this->member->setData($_GET)->getMember();
        return $this->view('admin.members.edit', compact('member'));  
    }

    public function update() 
    {
        $update = $this->member->setData($_POST)->update();
        if($update){
            $this->request->setFlash(['success' => locale('message', 'success')]);
            $this->redirect('admin/members/show', ['id' => $_POST['id']]);
        }
        else{
            $this->redirect(back());
        }
    }

    public function delete() 
    { 
        $delete = $this->member->setData($_POST)->delete();
        if($delete){
            $this->request->setFlash(['success' => locale('message', 'success')]);
            $this->redirect('admin/members/all');
        }
        else{
            $this->request->setFlash(['danger' => locale('message', 'danger')]);
            $this->redirect(back());
        }  
    }

}