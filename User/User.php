<?php
 class User{
    private $id;
    private $fullname;
    private $username;
    private $email;
    private $password;
    private $role;
 
    public function __construct( $id,$fullname,$username,$email ,$password, $role){
        $this->id=$id;
        $this->fullname=$fullname;
        $this->username=$username;
        $this->email=$email;
        $this->password=$password;
        $this->role=$role;
    }
    public function getId(){
        return $this->id;
    }

    public function getFullname(){
        return $this->fullname;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getRole(){
        return $this->role;
    }
    
    public function setFullname($fullname){
        $this->fullname=$fullname;
    }
    public function setUsername($username){
        $this->username=$username;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function setPassword($password){
        $this->password=$password;
    }
    public function setRole($role){
        $this->role=$role;
    }

    public function isValid()
    {
        if(empty($this->fullname) || empty($this->username) || empty($this->email) || empty($this->password)){
            return false;
        }

        return true;
    }
   
    public function __toString(){
        return "id:".$this->id."fullname".$this->fullname."username".$this->username."email:".$this->email."password".$this->password."role".$this->role;
    }
 }
?>