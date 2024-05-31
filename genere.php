<?php


class Genere {
    private string $title;

    public function __construct(string $title) {
        
        $this->title = $title;

    }



    public function __toString() {
        return $this->title;
    }


}