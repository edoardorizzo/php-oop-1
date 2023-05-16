<?php

require_once 'db.php';
require_once 'partials/header.php';

foreach ($movies as $movie) {
    echo "<li>";
    echo "Titolo: " . $movie->set_title() . "<br>";
    echo "Genere: " . $movie->set_genre()->set_name() . "<br>";
    echo "</li>";
}

require_once 'partials/footer.php';

?>