<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

class Movie {
  
  public $title;
  public $director;
  public $releasedate;
  public $budget;
  public $boxoffice; 
  public $guadagno;
  public $gains;

  //Costruttore
  public function __construct($_title, $_director, $_releasedate, $_budget, $_boxoffice){
    $this -> title = $_title;
    $this -> director = $_director;
    $this -> releasedate = $_releasedate;
    $this -> budget = $_budget;
    $this -> boxoffice = $_boxoffice;
  }

  //Funzione
  public function setGuadagno(){
    if($this -> boxoffice > $this -> budget) {
        $this->guadagno = "true";
    }
    else{
      $this->guadagno = "false";
    }
  }

  //Funzione di stampa
  public function getGuadagno(){
    return $this -> guadagno;
  }

  public function setGain( $boxoffice, $budget ){
    $gains = $boxoffice - $budget;
    }

  public function getGain(){
    return $this -> gains;
  }

}

//Istanziamento
$Tenenbaum = new Movie("The Royal Tenenbaums", "Wes Anderson", 2001 , 21000000 , 72000000 );

echo "<p> Film title: ". $Tenenbaum -> title ."</p>";
echo "<p> Director: ". $Tenenbaum -> director ."</p>";
echo "<p> Release date: ". $Tenenbaum -> releasedate ."</p>";
echo "<p> Budget: ". $Tenenbaum -> budget ."€</p>";
echo "<p> Box Office: ". $Tenenbaum -> boxoffice ."</p>";

//Stampa funzioni

echo "<p>" . $Tenenbaum -> setGuadagno() . "</p>";

// Non si stampa in public
// echo "<p>" . $Tenenbaum -> guadagno . "</p>";

// Risolto conversione Booleano
// var_dump($Tenenbaum -> getGuadagno());

echo "<p> It was a succes ? " . $Tenenbaum -> getGuadagno() . "</p>";


echo "<p>" . $Tenenbaum -> setGain($Tenenbaum -> boxoffice, $Tenenbaum -> budget) . "</p>";

echo "<p>" . $Tenenbaum -> getGain() . "</p>";

//Funzioni secondo object

$TreasurePlanet = new Movie("Treasure Planet", "John Musker", 2002 , 140000000 , 110000000 );

echo "<p> Film Title: ". $TreasurePlanet -> title ."</p>";
echo "<p> Director: ". $TreasurePlanet -> director ."</p>";
echo "<p> Release date: ". $TreasurePlanet -> releasedate ."</p>";
echo "<p> Budget: ". $TreasurePlanet -> budget ."€</p>";
echo "<p> Box Office: ". $TreasurePlanet -> boxoffice ."€</p>";

echo "<p>" . $TreasurePlanet -> setGuadagno() . "</p>";

echo "<p> It was a succes ? " . $TreasurePlanet -> getGuadagno() . "</p>";

?>