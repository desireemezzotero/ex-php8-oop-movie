<?php 
 require_once "./Models/Genre.php"; 
 require_once "./Traits/MovieImage.php";
 require_once "./db.php";

 class Movie {
   use MovieImage;

   public $title;
   public $year;
   public $director;
   public $duration;
   public $genre = [];

  //costruttore
   function __construct($_title, $_year, $_director, $_duration, $_image, $_genre = []){
   $this->title = $_title;
   $this->year = $_year;
   $this->director = $_director;
   $this->duration = $_duration;
   $this->genre = $_genre;
   
   if($_image){
     $this->setImage($_image);
   }
   }
  
   // metodo
   public function SetYear($year){
    if($year < 2000) {
      echo "anno troppo vecchio";
   } else {
     echo "film perfetto";
   }}
  }
?>