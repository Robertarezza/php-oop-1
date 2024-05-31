<?php

class Actor {
    private string $name;
   


    public function __construct(string $name, ) {
        

        $this->name     =$name;
        
    }

    public function getName() {
        return $this->name;
    }

    public function __toString() {

        return "{$this->name}";
        
    }
}



?>