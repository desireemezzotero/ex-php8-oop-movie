<?php 
require_once "./db.php";
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MOVIE OOP</title>

  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class= "bg-black">
<header>
    <nav class="h-[80px]">
     <h1 class="text-6xl font-extrabold text-white text-center pt-3 mb-10">MOVIE OOP</h1>
    </nav> 
  </header>

  <main>
   <div class="container m-auto grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6 ">

     <?php
    foreach($movies as $movie){
       ?>
       <div class="bg-gray-500 p-2 bg-opacity-30">
         <div class="mt-2">
             <img src="<?php echo $movie->image ?>" alt=""/>
             <h6 class="mb-2 font-bold text-white text-center">
               <?php echo $movie->title?>
             </h6>
             <p class="text-gray-200 text-sm">
               <span class="font-bold"> Anno:</span>
               <?php echo $movie->year?>
             </p>
              <p class=" mt-1 text-gray-200 text-sm">
              <span class="font-bold"> Regia:</span>
               <?php echo $movie->director?>
              </p>
             <p class=" mt-1 text-gray-200 text-sm">
             <span class="font-bold"> Durata:</span>
              <?php echo $movie->duration?>
             </p>
             
             <p class=" mt-1 text-gray-200 text-sm">
                <span class="font-bold mt-1 text-gray-200 text-sm"> Genere: </span>
                <?php
                 $titles = '';
                 $i = 0; 
    
                do {
                  $titles .= $movie->genre[$i]->title_genre . ' ';
                
                  $i++;
                } while ($i < count($movie->genre));
                echo $titles ?>
             </p>
            </div>
        </div>
      <?php  } ?>
    </div> 
  </main>


  
  
</body>

</html>