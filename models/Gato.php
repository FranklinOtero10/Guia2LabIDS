<?php
    require_once 'Animal.php';

    class Gato extends Animal{

        private $tipoSangre;

        function __construct($idAnimal, $nombre, $color, $edad, $peso, $tamanio, $sonido, $tipoSangre){

            parent::__construct($idAnimal, $nombre, $color, $edad, $peso, $tamanio, $sonido);
            $this->tipoSangre = $tipoSangre;
        }

        function __destruct(){}

        function getTipoSangre(){
            return $this->tipoSangre;
        }

        function getTienePulgas(){
            echo '<h2> No tiene pulgas :)'.'</h2>';
        }

        function getJuega(){
            echo '<h2> El animal esta jugando...'.'</h2>';
        }
    }