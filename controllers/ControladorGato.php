<?php

    require_once '../models/Gato.php';

    if(isset($_POST)){

        $idAnimal = $_POST['idAnimal'];
        $nombre = $_POST['nombre'];
        $color = $_POST['color'];
        $edad = $_POST['edad'];
        $peso = $_POST['peso'];
        $tamanio = $_POST['tamanio'];
        $sonido = $_POST['sonido'];
        $tipoSangre = $_POST['tipoSangre'];

        //Instancia de la clase
        $animal = new Gato($idAnimal, $nombre, $color, $edad, $peso, $tamanio, $sonido, $tipoSangre);

        echo '<h1> Datos del Gato'.'</h1>';
        echo '<h2>ID Animal: </h2>'.$animal->getIdAnimal();
        echo '<h2>Nombre: </h2>'.$animal->getNombre();
        echo '<h2>Color: </h2>'.$animal->getColor();
        echo '<h2>Edad: </h2>'.$animal->getEdad();
        echo '<h2>Peso: </h2>'.$animal->getPeso();
        echo '<h2>Tamaño: </h2>'.$animal->getTamanio();
        echo '<h2>Sonido: </h2>'.$animal->getSonido();
        echo '<h2>Tipo de Sangre: </h2>'.$animal->getTipoSangre();

        $animal->getTienePulgas();
        $animal->getJuega();

    }
?>