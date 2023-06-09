<!--Immaginiamo le classi per modellizzare un personal computer.
Un computer desktop é un computer.
Un computer portatile é un computer.
Creiamo la classe computer come parent class ed estendiamola per le classi desktop e laptop.
Creiamo un set di dati in forma di array di oggetti e stampiamoli a schermo in una card usando bootstrap.
Nella card, indichiamo anche che tipo di prodotto stiamo visualizzando (desktop, laptop) creando un apposito metodo poliforfo in ciascuna sottoclasse.-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <div class="bg-warning tx">
    <h1 class="text-center">Computers</h1>

    <?php
    trait Productcolor
    {
      public function getProductcolor()
      {
      }
    }
    class Computer
    {
      use Productcolor;
      public $type;
      public $brand;
      public $model;
      public $price;

      public function __construct($type, $brand, $model, $price)
      {
        $this->type = $type;
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;
      }
      public function getType()
      {
        return $this->type;
      }

      public function getBrand()
      {
        return $this->brand;
      }

      public function getModel()
      {
        return $this->model;
      }

      public function getPrice()
      {
        return $this->price;
      }
    }
    require_once('Index.php');
    require_once('Desktop.php');
    require_once('Laptop.php');

    $computers = array(
      new Desktop("Desktop", "Acer", "Aspire3", "$500"),
      new Laptop("Laptop", "Apple", "Macbook pro", "$1200")
    );

    foreach ($computers as $computer) {
    ?>
      <div class="card bg-primary flex-row">
        <img src="https://picsum.photos/seed/picsum/200/300" class="img-thumbnail" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo "Type: " . $computer->getType(); ?></h5>
          <p class="card-text"><?php echo  $computer->getProductcolor(); ?></p>
          <p class="card-text"><?php echo "Brand: " . $computer->getBrand(); ?></p>
          <p class="card-text"><?php echo "Model: " . $computer->getModel(); ?></p>
          <p class="card-text"><?php echo "Price: " . $computer->getPrice(); ?></p>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</body>

</html>