<?php
class Genere {
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }

    public function __toString(): string {
        return $this->name;
    }
}
?>
