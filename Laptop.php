<?php
require_once 'index.php';
class Laptop extends Computer {
    use Productcolor;
  
    function getProductcolor() {
      return "Color: blue";
    }
  }




  