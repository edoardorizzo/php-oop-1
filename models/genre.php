<?php

class Genre {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function set_name() {
        return $this->name;
    }
}

?>