<?php

require_once "movies.php";
require_once "genere.php";
require_once "actor.php";

$genere1= new Genere ("Fantascienza");
$actor1= new Actor ("Elijah Wood", "Frodo Baggins");

$movie1= new Movie ("Il Signore degli anelli", "Peter Jackson",$genere1 );
$movie1->setRelease_year(2001);
$movie1->addActor($actor1);
var_dump($movie1 );

$genere2= new Genere ("Azine");
$actor2 = new Actor("Ian McKellen", "Gandalf");
$movie2 = new Movie ("Io vi troverò", "Pierre Morel", $genere2);
$movie2->setRelease_year(2008);
$movie2->addActor($actor2);

var_dump($movie2);

// echo $movie1 . "<br>" .  $movie2;

// echo 
// $cast1 = $movie1->getCast();
// foreach ($cast1 as $actor) {
//     echo $actor . "<br>";
// }

// // Visualizza il cast del secondo film
// echo 
// $cast2 = $movie2->getCast();
// foreach ($cast2 as $actor) {
//     echo $actor . "<br>";
// }


?>

