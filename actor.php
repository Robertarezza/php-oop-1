<?php
class Actor {
    private string $name;
 

    public function __construct(string $name,) {
        $this->name = $name;
      
    }

    //serve per leggerla in quanto essendo privata
    public function getName() {
        return $this->name;
    }

    //trasformazione in string se no non posso stampare a schermo
    public function __toString() {
        return "{$this->name}";
    }
}
?>
