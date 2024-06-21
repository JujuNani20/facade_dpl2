<?php
require_once 'DC.php';
require_once 'Avengers.php';
require_once 'Marvel.php';

class CinemaFacade {
    protected $dc;
    protected $avengers;
    protected $marvel;

    public function __construct() {
        $this->dc = new DC;
        $this->avengers = new Avengers;
        $this->marvel = new Marvel;
    }

    public function bookMovieTicket(string $movie, string $time): string {
        $result = "Proses Boking:\n";

        if ($movie == 'DC') {
            $result .= $this->dc->bookTicket($time);
        } elseif ($movie == 'Avengers') {
            $result .= $this->avengers->bookTicket($time);
        } else {
            $result .= $this->marvel->bookTicket($time);
        }

        return $result;
    }
}
?>
