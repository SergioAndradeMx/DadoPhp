<?php
class Jugada {
    /**
     * Este método hace la función del constructor
     */
    public function iniciarJugada($jugador1, $jugador2, $dado1, $dado2) {
        $puntosJ1;
        $puntosJ2;
        
        // Lanzar los dados por turno
        $puntosJ1 = $this->turnarJugador($jugador1, $dado1, $dado2);
        $puntosJ2 = $this->turnarJugador($jugador2, $dado1, $dado2);

        $this->determinarGanador($jugador1, $puntosJ1, $jugador2, $puntosJ2);
    }

    private function turnarJugador($jugadorEnTurno, $d1, $d2) {
        return $jugadorEnTurno->lanzaDados($d1, $d2);
    }

    public function determinarGanador($j1, $pJ1, $j2, $pJ2) {
        if ($pJ1 == 7) {
            // se le asigna un punto al jugador 1
            $j1->puntoGanado = 1;
        } else {
            $j1->puntoGanado = 0;
        }

        if ($pJ2 == 7) {
            // se le asigna un punto al jugador 2
            $j2->puntoGanado = 1;
        } else {
            $j2->puntoGanado = 0;
        }
    }
}

?>