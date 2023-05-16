<?php

/*

Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’
all'interno della classe sono dichiarate delle variabili d'istanza
all'interno della classe è definito un costruttore
all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà.
Tra le varie proprietá, la classe Movie 'ha un' genere (sfruttare il concetto di composizione).

*/

class Movie {

    public $name;
    public $genre;
    public $duration;


    function set_name($name) {
        $this->name = $name;
    }

    function set_genre($genre) {
        $this->genre = $genre;
    }

    function set_duration($duration) {
        $this->duration = $duration;
    }

}

$scream = new Movie();
$lotr = new Movie();

$scream->set_name('Scream');
$lotr->set_name('Lord Of The Ring');

$scream->set_genre('Horror');
$lotr->set_genre('Fantasty');

$scream->set_duration(1.30);
$lotr->set_duration(3.20);

var_dump($scream);
var_dump($lotr);