<?php 
trait MovieImage {
  public $image;

  public function setImage($image) {
    $this->image = $image;
  }

  public function ControllerImage(){
    if($this->image){
      echo "immagine presente";
    } else {
      echo "inserire immagine";
    }
  }

}

?>