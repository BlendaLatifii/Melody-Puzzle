<?php
 class contact{
    private $id;
    private $fullname;
    private $email;
    private $subject;
    private $message;
 
    public function __construct( $id,$fullname,$email , $subject, $message){
        $this->id=$id;
        $this->fullname=$fullname;
        $this->email=$email;
        $this->subject=$subject;
        $this->message=$message;
    }
    public function getId(){
        return $this->id;
    }
    public function getFullname(){
        return $this->fullname;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getSubject(){
        return $this->subject;
    }
    public function getMessage(){
        return  $this->message;
    }
    public function setFullname($fullname){
        $this->fullname=$fullname;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function setSubject($subject){
        $this->subject=$subject;
    }
    public function setMessage($message){
        $this->message=$message;
    }
    public function __toString(){
        return "id:".$this->id."fullname".$this->fullname."email:".$this->email."subject".$this->subject."message".$this->message;
    }
}
?>