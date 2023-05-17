<!--Immaginiamo le classi per modellizzare un personal computer.
Un computer desktop é un computer.
Un computer portatile é un computer.
Creiamo la classe computer come parent class ed estendiamola per le classi desktop e laptop.
Creiamo un set di dati in forma di array di oggetti e stampiamoli a schermo in una card usando bootstrap.
Nella card, indichiamo anche che tipo di prodotto stiamo visualizzando (desktop, laptop) creando un apposito metodo poliforfo in ciascuna sottoclasse.-->
<?php
class Computer {
    public $type;
    public $brand;
    public $model;
    public $price;
  
    public function __construct($type, $brand, $model, $price) {
      $this->type = $type;
      $this->brand = $brand;
      $this->model = $model;
      $this->price = $price;
    }
  
    public function getType() {
      return $this->type;
    }
  
    public function getBrand() {
      return $this->brand;
    }
  
    public function getModel() {
      return $this->model;
    }
  
    public function getPrice() {
      return $this->price;
    }
  }


  //extend class
  //class Desktop extends Computer {
  //  public function __construct( $type,$brand, $model, $price)  }

    //class Laptop extends Computer {
       // public function __construct($type,$brand, $model, $price)  }
