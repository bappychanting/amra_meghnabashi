<?php

namespace App\Http\Controllers;

use App\Models\News; 
use App\Models\Member; 
use App\Models\Content; 
use App\Models\Project; 

class HomeController extends Controller
{
    private $news;
    private $member;
    private $content;
    private $project;

    public function __construct() {
        $this->news = new News;
        $this->member = new Member;
        $this->content = new Content;
        $this->project = new Project;
    }

    public function welcome() 
    {
        $this->content->setId(1);
        $content = $this->content->getWebContent();
        $newses = $this->news->getNewses();
        $members = $this->member->getMembers();
        $projects = $this->project->getProjects();
        return $this->view('welcome', compact('contents', 'newses', 'members', 'projects'));
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