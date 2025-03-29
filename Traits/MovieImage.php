<?php 
trait MovieImage {
  private $image;

  public function setImage($_image) {
    $this -> image = $_image;
  }

  public function ControllerImage($_image){
    if($image){
      echo "immagine presente";
    } else {
      echo "inserire immagine";
    }
  }

}

?>