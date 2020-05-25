<?php

namespace App\Models; 

class News extends Model{

    /* Declaring all variables */

    private $id;
    private $title;
    private $tags;
    private $image_path;
    private $details;
    private $user_id;

    /* Setter getter for all variables */

      // ID setter getter
    function setId($id){
        $this->id = intval($id);
    }
    function getId(){
        return $this->id;
    }

    	// News title Setter Getter
    function setTitle($title){
        $this->title = str_replace('\' ', '\'', ucwords(str_replace('\'', '\' ', strtolower($title))));
    }
    function getTitle(){
        return $this->title;
    }

        // Tags setter getter
    function setTag($tags){
        $this->tags = $tags;
    }
    function getTag(){
        return $this->tags;
    }

        // Image setter getter
    function setImage($image_path){
        $this->image_path = $image_path;
    }
    function getImage(){
        return $this->image_path;
    }

        // Detail setter getter
    function setDetail($details){
        $this->details = $details;
    }
    function getDetail(){
        return $this->details;
    }

        // User Id Setter Getter
    function setUser($user_id){
        $this->user_id = intval($user_id); 
    }       
    function getUser(){
        return $this->user_id;
    }

    /* All functions */

      // Setting all the data
    public function setData($data = ''){
		if (isset($data['id'])){
            $this->setId($data['id']);
        }

        if (isset($data['title'])){
            $this->setTitle($data['title']);
        }

        if (isset($data['tags'])){
            $this->setTag($data['tags']);
        }

        if (isset($data['image_path'])){
            $this->setImage($data['image_path']);
        }

        if (isset($data['details'])){
            $this->setDetail($data['details']);
        }

        if (isset($data['user_id'])){
            $this->setUser($data['user_id']);
        }
      	return $this;
    }

		// Function for getting news
    public function getNewses() {   
        $news = $this->db->table('news_view')->orderBy('created_at', 'desc')->limit(12)->read();
        $pagination = $this->db->pagination();
        return array('news' => $news, 'pagination' => $pagination);
    }

        // Function for all news
    public function getAllNewses() {   
        $news = $this->db->table('news_view')->orderBy('created_at', 'desc')->limit(2000)->read();
        return $news;
    }

    	// Function for showing News
    public function getNews() {   
	    $news = $this->db->table('news_view')->where('id', '=', $this->getId())->read();
	    return $news[0];
    }

    	// Function for storing News
    public function store() {   
        $store = $this->db->table('news')->data(['title' => $this->getTitle(), 'tags' => $this->getTag(), 'image_path' => $this->getImage(), 'details' => $this->getDetail(), 'user_id' => $this->getUser()])->create();
        return $store;
    }

    	// Function for Editing News
    public function update() {
        $update = $this->db->table('news')->set(['title' => $this->getTitle(), 'tags' => $this->getTag(), 'image_path' => $this->getImage(), 'details' => $this->getDetail()])->where('id', '=', $this->getId())->update();
        return $update;
    }

    	// Function for deleting News
    public function delete() {  
        $delete = $this->db->table('news')->where('id', '=', $this->getId())->delete();
        return $delete; 
    }

	

}