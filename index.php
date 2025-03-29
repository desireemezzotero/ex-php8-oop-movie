<?php 
 require_once "./Models/Genre.php";

 class Movie {
   public $title;
   public $year;
   public $director;
   public $duration;
   public $genre = [];

  //costruttore
   function __construct($_title, $_year, $_director, $_duration, $_genre = []){
   $this->title = $_title;
   $this->year = $_year;
   $this->director = $_director;
   $this->duration = $_duration;
   $this->genre = $_genre;
   }
  
   // metodo
   public function SetYear($year){
    if($year < 2000) {
      echo "anno troppo vecchio";
   } else {
     echo "film perfetto";
   }}
  }

 $animation = new Genre("animazione","film d'animazione");
 $commedy = new Genre("commedia","film commedia");
 $coco = new Movie("Coco", 2017, "Lee Unkrich",105, [$commedy, $animation]);
 $aladin = new Movie("Aladin", 1992, " Ron Clements",90, $animation);

 $coco->SetYear($coco->year);

 echo "<pre>";
 var_dump( $coco);
 var_dump( $aladin);
 echo "</pre>";

?>