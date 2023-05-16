 <?php
 require_once("Dado.php");
     class Jugador {
        public $nombre;
        public $puntoGanado;
    
        /**
         * @param Dado $dado1 Primer dado a lanzar
         * @param Dado $dado2 Segundo dado a lanzar
         * @return int Devuelve la suma de los puntos obtenidos en ambos dados
         */
        public function lanzaDados($dado1, $dado2) {
            $dado1->lanzar();
            $dado2->lanzar();
    
            // Retornar los puntos que cayeron en los dados
            return (int) ($dado1->puntos + $dado2->puntos);
        }
    }
?>
