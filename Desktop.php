<?php
require_once 'index.php';

class Desktop extends Computer {
    use Productcolor;
  
    function getProductcolor() {
      return "Color: red";
    }
  }