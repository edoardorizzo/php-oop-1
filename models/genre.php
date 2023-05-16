<?php

class Genre {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function set_name() {
        return $this->name;
    }
}

?>