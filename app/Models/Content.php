<?php

namespace App\Models; 

class Content extends Model{

	/* Declaring all ariables */
  private $id;
  private $content;

  /* Setter getter for all variables */

    // ID setter getter
  function setId($id){
      $this->id = intval($id);
  }
  function getId(){
      return $this->id;
  }

    // Content setter getter
  function setContent($content = array()){
    $this->content = json_encode($content);
  }
  function getContent(){
      return $this->content;
  }

  public function getWebContent(){     
    $content = $this->db->table('web_contents')->where('id', '=', $this->getId())->read();
    return $content[0];
  }

  public function update(){   
    $update = $this->db->table('web_contents')->set(['content' => $this->getContent()])->where('id', '=', $this->getId())->update();
    return $update;
  }

}