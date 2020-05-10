<?php

namespace App\Models; 

class Project extends Model{

    /* Declaring all variables */

    private $id;
    private $name;
    private $details;

    /* Setter getter for all variables */

      // ID setter getter
    function setId($id){
        $this->id = intval($id);
    }
    function getId(){
        return $this->id;
    }

    	// projects name Setter Getter
    function setName($name){
        $this->name = str_replace('\' ', '\'', ucwords(str_replace('\'', '\' ', strtolower($name))));
    }
    function getName(){
        return $this->name;
    }

        // Detail setter getter
    function setDetail($details){
        $this->details = $details;
    }
    function getDetail(){
        return $this->details;
    }

    /* All functions */

      // Setting all the data
    public function setData($data = ''){
		if (isset($data['id'])){
            $this->setId($data['id']);
        }

        if (isset($data['name'])){
            $this->setName($data['name']);
        }

        if (isset($data['details'])){
            $this->setDetail($data['details']);
        }

      	return $this;
    }

		// Function for getting projects
    public function getProjects() {   
        $projects = $this->db->table('projects')->orderBy('created_at', 'desc')->limit(10)->read();
        $pagination = $this->db->pagination();
        return array('projects' => $projects, 'pagination' => $pagination);
    }

        // Function for all projects
    public function getAllProjects() {   
        $projects = $this->db->table('projects')->orderBy('created_at', 'desc')->limit(2000)->read();
        return $projects;
    }

    	// Function for showing project
    public function getProject() {   
	    $projects = $this->db->table('projects')->where('id', '=', $this->getId())->read();
	    return $projects[0];
    }

        // Function for getting project donations
    public function getProjectDonations(){    
        $donations = $this->db->table('donations_view')->where('project_id', '=', $this->getId())->read();
        return $donations;
    }

    	// Function for storing projects
    public function store() {   
        $store = $this->db->table('projects')->data(['name' => $this->getName(), 'details' => $this->getDetail()])->create();
        return $store;
    }

    	// Function for Editing projects
    public function update() {
        $update = $this->db->table('projects')->set(['name' => $this->getName(), 'details' => $this->getDetail()])->where('id', '=', $this->getId())->update();
        return $update;
    }

    	// Function for deleting projects
    public function delete() {  
        $delete = $this->db->table('projects')->where('id', '=', $this->getId())->delete();
        return $delete; 
    }

	

}