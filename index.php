<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    class Prodotto { 
      public $categoria;
      public $brand;
      public $codice;
      public $quantita;
      

      public function __construct($categoria, $brand, $codice, $quantita) {
        $this->categoria = $categoria;
        $this->brand = $brand;
        $this->codice = $codice;
        $this->quantita = $quantita;
        
      }

      public function printMe() {
        echo "La categoria merceologica è " . $this -> categoria . "<br>" .
        "Il brand è " . $this -> brand . "<br>".
        "Il codice prodotto è " . $this -> codice . "<br>" .
        "La quantità stoccata è " . $this -> quantita . "<br><br>";
      }
    }




    $prodotto1 = new Prodotto("cpu", "intel", 6302021, "246");
    $prodotto1 -> printMe();
    $prodotto2 = new Prodotto("video card", "nvidia", 4892674, "122");
    $prodotto2 -> printMe();
    $prodotto3 = new Prodotto("ram", "corsair", 3214326, "321");
    $prodotto3 -> printMe();


  ?>
</body>
</html>