<?php

namespace App\Http\Controllers;

use App\Models\News; 
use App\Models\Member; 
use App\Models\Content; 
use App\Models\Project; 
use App\Helpers\ApiHelper;

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
        $contents = $this->getContents();
        $newses = $this->news->getNewses();
        $members = $this->member->getMembersByCategory();
        $projects = $this->project->getProjects();
        return $this->view('welcome', compact('contents', 'newses', 'members', 'projects'));
    }

    public function meghnaHistory() 
    {
        $contents = $this->getContents();
        $meghna = $this->getContents(2);
        return $this->view('meghna.history', compact('contents', 'meghna'));
    }

    public function meghnaItems() 
    {
        $contents = $this->getContents();
        return $this->view('meghna.items', compact('contents'));
    }

    public function meghnaPersonalities() 
    {
        $contents = $this->getContents();
        $personalities = $this->member->getPersonalities();
        return $this->view('meghna.personalities', compact('contents', 'personalities'));
    }

    public function members() 
    {
        $contents = $this->getContents();
        $members = $this->member->getMembersByCategory();
        return $this->view('members.index', compact('contents', 'members'));
    }

    public function showMember() 
    {
        $contents = $this->getContents();
        $member = $this->member->setData($_GET)->getMember();
        return $this->view('members.show', compact('contents', 'member'));
    }

    public function joinMember() 
    {
        $contents = $this->getContents();
        return $this->view('members.join', compact('contents'));
    }

    public function submitMember() 
    {
       
    }

    public function projects() 
    {
        $contents = $this->getContents();
        $projects = $this->project->getProjects();
        return $this->view('projects.index', compact('contents', 'projects'));
    }

    public function showPoject() 
    {
        $contents = $this->getContents();
        $project = $this->project->setData($_GET)->getProject();
        return $this->view('projects.show', compact('contents', 'project'));
    }

    public function news() 
    {
        $contents = $this->getContents();
        $newses = $this->news->getNewses();
        return $this->view('news.index', compact('contents', 'newses'));
    }

    public function showNews() 
    {
        $contents = $this->getContents();
        $news = $this->news->setData($_GET)->getNews();
        return $this->view('news.show', compact('contents', 'news'));
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

    public function testApi() 
    {
        echo ApiHelper::success();
    }

    private function getContents($id = 1){
        $this->content->setId($id);
        $get_content = $this->content->getWebContent();
        $contents = json_decode($get_content['content'], 'true');
        return $contents;
    }

}