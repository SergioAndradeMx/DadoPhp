   
   <?php
    require_once("JuegoDados.php");
    require_once("Jugada.php");
    require_once("Jugador.php");
    require_once("Dado.php");
    class Main {
        public static function main() {
            // Leer nombres de jugadores desde el teclado
            $juego = new JuegoDados("jugador 1", "jugador 2");
            $juego->iniciarJuego();
    
            if ($juego->vencedor == null) {
                echo "Empate. No hay un vencedor.";
            } else {
                echo "El vencedor es: " . $juego->vencedor->nombre;
            }

            echo  " Puntos ".$juego->jugador1->nombre.": ".$juego->marcadorJugador1;
            
            echo  " Puntos ".$juego->jugador2->nombre.": ".$juego->marcadorJugador2;
        }
    }
     // Codificar los datos en JSON y devolverlos

    Main::main();
    ?>
