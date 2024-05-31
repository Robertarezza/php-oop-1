<?php


class Movie {

    private string $title;
    private string $director;
    private string $release_year;
    private Genere $genere;



    public function __construct(string $title, string $director, Genere $genere) {
        
        $this->title            = $title;
        $this->director         = $director;
        $this->genere           = $genere;
       

    }

    public function setRelease_year(string $release_year) {
        $this->release_year = $release_year;
    }


    public function getRelease_year() {

        return $this->release_year;
    }

    public function __toString() {
        
        return "Titolo: {$this->title}, Anno d'uscita: {$this->release_year}, Diretto da: {$this->director}, Genere: {$this->genere}";
    }
}








?>
