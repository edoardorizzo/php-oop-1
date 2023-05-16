<?php

require_once 'db.php';
require_once 'partials/app.php';

foreach ($movies as $movie) {
    echo "<li>";
    echo "Titolo: " . $movie->set_title() . "<br>";
    echo "Genere: " . $movie->set_genre()->set_name() . "<br>";
    echo "</li>";
}

?>