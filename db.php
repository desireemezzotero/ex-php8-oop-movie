<?php 

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once "./Models/Genre.php";
require_once "./Models/Movie.php";
require_once "./Traits/MovieImage.php";

//GENERE
$animation = new Genre("Animazione","Il genere animazione è noto per portare in vita storie attraverso disegni, illustrazioni digitali o modellazione in 3D");

$commedy = new Genre("Commedia","La commedia è il genere cinematografico che punta a far ridere il pubblico, spesso utilizzando situazioni assurde, dialoghi esilaranti e personaggi eccentrici");

$adventure = new Genre("Avventura","I film di avventura sono costruiti attorno a un viaggio, un'esplorazione o una missione, spesso in ambientazioni esotiche o pericolose");

$action = new Genre("Azione","Il genere azione è caratterizzato da una trama ad alta energia, che coinvolge sequenze rapide e dinamiche, combattimenti, inseguimenti e altre attività fisiche ad alto rischio");

$romantic = new Genre("Romantico","Il genere romantico si concentra sulle storie d'amore, esplorando le emozioni, le relazioni e i legami sentimentali tra i protagonisti");

$family = new Genre("Famiglia","Il genere famiglia include film pensati per un pubblico di tutte le età, dove i temi centrali sono spesso l'amore familiare, l'amicizia e la crescita personale");





//FILM
$coco = new Movie(
  "Coco", 
  2017, 
  "Lee Unkrich e Adrian Molina",
  109, 
  "https://pad.mymovies.it/filmclub/2016/10/147/locandina.jpg",
  [$animation, $adventure, $commedy]
);


$aladin = new Movie(
  "Aladin", 
  1992, 
  "Ron Clements e John Musker",
  90, 
  "https://pad.mymovies.it/filmclub/2002/08/148/locandinapg1.jpg", 
  [$animation,$action, $commedy, $adventure]
);


$bella = new Movie(
  "La bella e la Bestia", 
  1991, 
  "Gary Trousdale e Kirk Wise",
  87, 
  "https://image.tmdb.org/t/p/original/gd07oN6IwqsWyQH5QiBphhbqLhU.jpg", 
  [$animation,$commedy,$romantic ]
);

$biancaneve = new Movie(
  "Biancaneve e i sette nani", 
  1937, 
  "Marc Webb",
  83, 
  "https://pad.mymovies.it/filmclub/2002/08/012/locandina.jpg", 
  [$romantic,$family ]
);

$cenerentola = new Movie(
  "Cenerentola", 
  1937, 
  "Kenneth Branagh",
  65, 
  "https://pad.mymovies.it/filmclub/2002/06/027/locandina.jpg", 
  [$romantic,$family,$commedy ]
);



$movies = [$coco,$aladin,$biancaneve,$cenerentola,$bella];

?>

