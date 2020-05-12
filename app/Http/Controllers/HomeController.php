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
        $get_content = $this->content->getWebContent();
        $contents = json_decode($get_content['content'], 'true');
        $newses = $this->news->getNewses();
        $members = $this->member->getNewMembers();
        $projects = $this->project->getProjects();
        return $this->view('welcome', compact('contents', 'newses', 'members', 'projects'));
    }

    public function members() 
    {
        $members = $this->member->getMembers();
        return $this->view('members.index', compact('members'));
    }

    public function showMember() 
    {
        $member = $this->member->setData($_GET)->getMember();
        return $this->view('members.show', compact('member'));
    }

    public function projects() 
    {
        $projects = $this->project->getProjects();
        return $this->view('projects.index', compact('projects'));
    }

    public function showPoject() 
    {
        $project = $this->project->setData($_GET)->getProject();
        return $this->view('projects.show', compact('project'));
    }

    public function news() 
    {
        return $this->view('news.index');
    }

    public function showNews() 
    {
        return $this->view('news.show');
    }

    public function subscribe(){
        $this->add_subscriber($_POST['sub_email']);
        $subject = 'Amra Meghnabashi: Thanks for subscribing!';
        $body = 'Thanks for subscribing! You will be receiving our news and updates!';
        $body .= '<br><b>Regards,</b><br>Amra Meghnabashi';
        $this->sendMail([$_POST['sub_email']], $subject, $body);
        $this->abort(200, 'Thanks for subscribing! Please check your email!');
    }

    public function error() 
    {
        $this->abort(404);
    }

}