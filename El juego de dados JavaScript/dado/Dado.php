<?php
class Dado {
    public $puntos;

    /**
     * Este método simula el lanzamiento de un dado, mediante la función random
     * y asignando el valor al atributo puntos
     */
    public function lanzar() {
        // Simular el lanzamiento
        $this->puntos = rand(1, 6);
    }
}
?>
