<?php

require_once "movies.php";
require_once "genere.php";

$genere1= new Genere ("Fantascienza");

$movie1= new Movie ("Il Signore degli anelli", "Peter Jackson",$genere1 );
$movie1->setRelease_year(2001);
var_dump($movie1 );

echo $movie1;
