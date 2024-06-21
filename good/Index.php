<?php
require_once 'CinemaFacade.php';

function clientCode(CinemaFacade $facade, string $movie, string $time) {
    echo $facade->bookMovieTicket($movie, $time);
}

$dc = new DC();
$avengers = new Avengers();
$marvel = new Marvel();
$facade = new CinemaFacade($dc, $avengers, $marvel);

clientCode($facade, "DC", "7:00 PM");
echo "<br>";
clientCode($facade, "Avengers", "9:00 PM");
echo "<br>";
clientCode($facade, "Marvel", "11:00 PM");
echo "<br>";
?>
