<?php
    require_once "controlador/plantilla.controlador.php";
    require_once "controlador/Usuarios.controlador.php";
    require_once "controlador/productos.controlador.php";

    //Llamando a los modelos 
    require_once "modelos/Usuarios.modelos.php";
    require_once "modelos/productos.modelo.php";

    //creamos una nueva instancia de controlador plantilla
    $plantilla = new ControladorPlantilla();
    $plantilla ->crtPlantilla();


?>