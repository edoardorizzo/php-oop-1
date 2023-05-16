<?php

require_once 'Models/Genre.php';
require_once 'Models/Movie.php';

$genre1 = new Genre("Azione");
$genre2 = new Genre("Horror");
$genre3 = new Genre("Pulp");

$movies = [
    new Movie("Lord of the Ring", $genre1),
    new Movie("Scream", $genre2),
    new Movie("Pulp Fiction", $genre2),
    
];

?>
