<?php

namespace App\Http\Controllers;

use Base\DB;  
use Base\Mail;
use App\Helpers\Misc;
use Base\BaseController; 

class Controller extends BaseController{

  public function sendMail($receivers = array(), $subject, $message, $sender = 'noreply@amrameghnabasi.org', $cc = array(), $bcc = array()) 
  {
    $mail = new Mail; 
    $mail->setReceivers($receivers);  
    $mail->setSender($sender);
    $mail->setCarbonCopies($cc);
    $mail->setBlindCarbonCopies($bcc);
    $mail->setSubject($subject);
    $mail->setMessage($message);  
    $mail->createMessage()->send();
  }

  public function get_subscribers(){
    $db = new DB();
    $count = 0;
    $subscribers = '';
    $get_subscribers = $db->table('subscribers')->read();
    $subscribers = Misc::pluck($get_subscribers, 'email');
    return $subscribers;
  }

  public function add_subscriber($email = ''){
    $db = new DB();
    if(!empty($email) && !$db->table('subscribers')->where('email', '=', $email)->check()){
      $store = $db->table('subscribers')->data(['email' => $email])->create();
    }
    return TRUE;
  }

}