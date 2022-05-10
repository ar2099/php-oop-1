<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
  

<?php
$generi = ["fantascienza", "azione", "drammatico", "comico", "horror"];
$eta = ["+18", "+3", "+8", "+13"]
?>

<?php
class Movie {
    public $nome;
    public $genere;
    public $rating;

    public function setGenere(){
      $numeroGenere =  rand(0, 4);
      return  $this-> genere = $generi[$numeroGenere];
    }

    public function setRating(){
      $numeroRating =  rand(0, 3);
     return   $this-> rating = $eta[$numeroRating];
    }

    function __construct($_nome){
        $this-> nome = $_nome;
    }
}

$tarzan = new Movie("tarzan");
var_dump($tarzan);
?>






</body>
</html>