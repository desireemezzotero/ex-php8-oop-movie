<?php 
 require_once "./Genre.php";
 require_once "../Traits/MovieImage.php";

 class Movie {
   use MovieImage;

   public $title;
   public $year;
   public $director;
   public $duration;
   public $genre = [];

  //costruttore
   function __construct($_title, $_year, $_director, $_duration, $_genre = [], $_image){
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

  //Aggiungo gli elementi al genere 
 $animation = new Genre("animazione","film d'animazione");
 $commedy = new Genre("commedia","film commedia");

 // Aggiungo i film alla classe film
 $coco = new Movie("Coco", 2017, "Lee Unkrich",105, [$commedy, $animation],"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQunZx1TxbQCO29i0oWi3bLI0rwRVvyE4ljkA&s");
 $aladin = new Movie("Aladin", 1992, " Ron Clements",90, $animation, "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQunZx1TxbQCO29i0oWi3bLI0rwRVvyE4ljkA&s");

 // uso il metodo per vedere l'anno del film
 $coco->SetYear($coco->year);

 $coco->controllerImage($image); 
 echo "<pre>";
 var_dump( $coco);
 var_dump( $aladin);
 echo "</pre>";

?>