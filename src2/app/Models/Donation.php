<?php

namespace App\Models; 

class Donation extends Model{

    /* Declaring all variables */

    private $id;
    private $donation;
    private $donation_date;
    private $member_id;
    private $project_id;

    /* Setter getter for all variables */

        // ID setter getter
    function setId($id){
        $this->id = intval($id);
    }
    function getId(){
        return $this->id;
    }

    	// projects donation Setter Getter
    function setDonation($donation){
      $this->donation = floatval($donation);
    }
    function getDonation(){
        return $this->donation;
    }

        // Donation Date setter getter
    function setDonationDate($donation_date){
        $this->donation_date = date('Y-m-d', strtotime(str_replace('/', '-', $donation_date))); 
    }
    function getDonationDate(){
        return $this->donation_date;
    }

        // Member setter getter
    function setMember($member_id){
        $this->member_id = intval($member_id); 
    }
    function getMember(){
        return $this->member_id;
    }

        // Project Date setter getter
    function setProject($project_id){
        $this->project_id = intval($project_id); 
    }
    function getProject(){
        return $this->project_id;
    }

    /* All functions */

      // Setting all the data
    public function setData($data = ''){
		if (isset($data['id'])){
            $this->setId($data['id']);
        }

        if (isset($data['donation'])){
            $this->setDonation($data['donation']);
        }

        if (isset($data['donation_date'])){
            $this->setDonationDate($data['donation_date']);
        }

        if (isset($data['member_id'])){
            $this->setMember($data['member_id']);
        }

        if (isset($data['project_id'])){
            $this->setProject($data['project_id']);
        }

      	return $this;
    }
        // Function for getting project donations
    public function getProjectDonations(){    
        $donations = $this->db->table('donations_view')->where('project_id', '=', $this->getProject())->read();
        return $donations;
    }

        // Function for getting member donations
    public function getMemberDonations(){    
        $donations = $this->db->table('donations_view')->where('member_id', '=', $this->getMember())->read();
        return $donations;
    }

    	// Function for storing donations
    public function store() {   
        $store = $this->db->table('donations')->data(['donation' => $this->getDonation(), 'donation_date' => $this->getDonationDate(), 'member_id' => $this->getMember(), 'project_id' => $this->getProject()])->create();
        return $store;
    }

    	// Function for deleting donations
    public function delete() {  
        $delete = $this->db->table('donations')->where('id', '=', $this->getId())->delete();
        return $delete; 
    }

	

}