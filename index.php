<?php

require_once "movies.php";
require_once "genere.php";

$genere1= new Genere ("Fantascienza");

$movie1= new Movie ("Il Signore degli anelli", "Peter Jackson",$genere1 );
$movie1->setRelease_year(2001);
var_dump($movie1 );

$genere2= new Genere ("Azine");
$movie2 = new Movie ("Io vi troverò", "Pierre Morel", $genere2);
$movie2->setRelease_year(2008);

var_dump($movie2);

echo $movie1 . "<br>" .  $movie2;


?>

