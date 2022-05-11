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
$botteghini = ["scarso", "medio", "successo", "blockbuster"]
?>

<?php
class Movie {
    public $nome;
    public $genere;
    public $rating;
    

    public function setRating($_rating){
      $this-> rating = $_rating;
    }

    function __construct($_nome, $_genere){
        $this-> nome = $_nome;
        $this-> genere = $_genere;
    }
    
}

$tarzan = new Movie("tarzan", "avventura");
$bilbo = new Movie("bilbo", "fantasy");
$bilbo->setRating("+18");
$tarzan->setRating("+6");
//  var_dump($tarzan);
// var_dump($bilbo);

echo "<p>" . $tarzan -> nome . "</p>";
echo "<p>" . $tarzan -> genere . "</p>";
echo "<p>" . $tarzan -> rating . "</p>";

echo "<p>" . $bilbo -> nome . "</p>";
echo "<p>" . $bilbo -> genere . "</p>";
echo "<p>" . $bilbo -> rating . "</p>";
?>






</body>
</html>