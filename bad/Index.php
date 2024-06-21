<?php
require_once 'CinemaFacade.php';

function clientCode(CinemaFacade $facade, string $movie, string $time) {
    echo $facade->bookMovieTicket($movie, $time);
}

$facade = new CinemaFacade();

clientCode($facade, "DC", "7:00 PM");
echo "<br>";
clientCode($facade, "Avengers", "9:00 PM");
echo "<br>";
clientCode($facade, "Marvel", "11:00 PM");
echo "<br>";
?>
