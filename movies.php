<?php
require_once "genere.php"; 
require_once "actor.php";

class Movie {

    private string $title;
    private string $director;
    private string $release_year;
    private Genere $genere;
    private array $cast;



    public function __construct(string $title, string $director, Genere $genere) {
        
        $this->title            = $title;
        $this->director         = $director;
        $this->genere           = $genere;
        $this->cast             = [];
       

    }

    public function setRelease_year(string $release_year) {
        $this->release_year = $release_year;
    }


    public function getRelease_year() {

        return $this->release_year;
    }


    public function addActor(Actor $actor) {
        $this->cast[] = $actor;
    }

    public function getCast() {
        return $this->cast;
    }



    public function __toString() {
        
        return "{$this->title} {$this->release_year} {$this->director} {$this->genere} {$this->cast}";
    }




}








?>
