<?php

require_once "genere.php"; 
require_once "actor.php";

class Movie {
    private string $title;
    private string $director;
    private string $release_year;
    private Genere $genere;
    private array $cast; // Deve essere un array

    public function __construct(string $title, string $director, Genere $genere) {
        $this->title = $title;
        $this->director = $director;
        $this->genere = $genere;
        $this->cast = [];  // Inizializza il cast come array vuoto
    }

    public function setReleaseYear(string $release_year): void {
        $this->release_year = $release_year;
    }

    //serve per leggerla in quanto essendo privata
    public function getReleaseYear() {
        return $this->release_year;
    }

    //serve per leggerla in quanto essendo privata
    public function getTitle() {
        return $this->title;
    }

    //serve per leggerla in quanto essendo privata
    public function getDirect() {
        return $this->director;
    }

    //serve per leggerla in quanto essendo privata
    public function getGener() {
        return $this->genere;
    }

    //serve per leggerla in quanto essendo privata
    public function getRelease() {
        return $this->release_year;
    }

    //serve per aggiungere nuovi attori al cast essendo un array
    public function addActor(Actor $actor) {
        $this->cast[] = $actor;
    }

    
    //serve per leggerla in quanto essendo privata
    public function getCast() {
        return $this->cast;
    }

    
    //trasformazione in string se no non è possibile stamparlo in pagina
    public function __toString(): string {
        $genere_name = $this->genere->getName();
        $cast_list = array_map(fn($actor) => (string)$actor, $this->cast);
        $cast_string = implode(", ", $cast_list);
        return "{$this->title} {$this->release_year} {$this->director} {$genere_name} {$cast_string}";
    }
}
?>

