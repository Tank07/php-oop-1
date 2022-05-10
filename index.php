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

  //Costruttore
  public function __construct($_title, $_director, $_releasedate, $_budget, $_boxoffice){
    $this -> title = $_title;
    $this -> director = $_director;
    $this -> releasedate = $_releasedate;
    $this -> budget = $_budget;
    $this -> boxoffice = $_boxoffice;
  }

  //funzione
  public function setGuadagno(){
    if($this -> boxoffice > $this -> budget) {
        $this->guadagno = "true";
    }
  }

  //Funzione di stampa
  public function getGuadagno( ){
    return $this -> guadagno;
  }
}

//istanziamento
$Tenenbaum = new Movie("The Royal Tenenbaums", "Wes Anderson", 2001 , 21000000 , 72000000 );

echo "<p>". $Tenenbaum -> title ."</p>";
echo "<p>". $Tenenbaum -> director ."</p>";
echo "<p>". $Tenenbaum -> releasedate ."</p>";
echo "<p>". $Tenenbaum -> budget ."</p>";
echo "<p>". $Tenenbaum -> boxoffice ."</p>";

//Stampa funzioni

echo "<p>" . $Tenenbaum -> setGuadagno() . "</p>";

// Non si stampa in public
// echo "<p>" . $Tenenbaum -> guadagno . "</p>";

// Risolto conversione Booleano
// var_dump($Tenenbaum -> getGuadagno()) ;

echo "<p>" . $Tenenbaum -> getGuadagno() . "</p>";

?>