<?php
    class Conexion
    {
        static public function Conectar()
        {
            //Colocamos el puerto si es nesesario:3309
            $link = new PDO("mysql:host=localhost:3309;dbname=sistemaventa2025", "root", "");
            //en cotejamiento en utf8
            $link -> exec("set names utf8");
            return $link;
        }
    }

?>