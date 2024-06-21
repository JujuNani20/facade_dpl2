<?php
require_once 'DC.php';
require_once 'Avengers.php';
require_once 'Marvel.php';

class CinemaFacade {
    protected $dc;
    protected $avengers;
    protected $marvel;

    public function __construct(DC $dc = null, Avengers $avengers = null, Marvel $marvel = null) {
        $this->dc = $dc ?: new DC;
        $this->avengers = $avengers ?: new Avengers;
        $this->marvel = $marvel ?: new Marvel;
    }

    public function bookMovieTicket(string $movie, string $time): string {
        $result = "Proses Boking:\n";

        switch ($movie) {
            case 'DC':
                $result .= $this->dc->bookTicket($time);
                break;
            case 'Avengers':
                $result .= $this->avengers->bookTicket($time);
                break;
            case 'Marvel':
                $result .= $this->marvel->bookTicket($time);
                break;
        }

        return $result;
    }
}
?>
