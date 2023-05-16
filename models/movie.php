<?php

class Movie {
    private $title;
    private $genre;

    public function __construct($title, $genre) {
        $this->title = $title;
        $this->genre = $genre;
    }

    public function set_title() {
        return $this->title;
    }

    public function set_genre() {
        return $this->genre;
    }
}

?>
