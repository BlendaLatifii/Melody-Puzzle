<?php
class Song{
  private  $Id;
  private $title;
  private $artist;
  private $genre;
  private $publicationDate;
  private $photo;
  private $music;

  public function __construct(){

  }
  
  public function getId(){
       return $this->Id;
  }
  public function getTitle(){
    return $this->title;
  }
  public function getArtist(){
    return $this->artist;
  }
  public function getGenre(){
    return $this->genre;
  }
  public function getPublicationDate(){
     return $this->publicationDate;
  }
  public function setTitle($title){
    $this->title=$title;
  } 
  public function setArtisti($artist){
    $this->artist=$artist;
  }
  public function setGenre($param){
    $this->genre=$param;
  }
  public function setMusic($param){
    $this->music=$param;
  }
  public function setPhoto($param){
    $this->photo=$param;
  }
  public function getMusic(){
    return $this->music;
  } 
  public function getPhoto(){
    return $this->photo;
  } 

  public function setDataEPublikimit($publicationDate){
    $this->publicationDate=$publicationDate;
  }

  public function __toString(){
    return "id".$this->Id."title".$this->title."artist".$this->artist."genre".$this->genre."publication Date".$this->publicationDate;
  }
}
?>