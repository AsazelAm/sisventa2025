<?php
    require_once "conexion.php";
    class ModeloUsuarios
    {
        //creamos un metodo para mostrar usuario
        static public function MdlMostrarUsuarios($tabla,$item, $valor): mixed
        {
            $stmt=Conexion :: Conectar()-> prepare("SELECT * FROM $tabla WHERE $item=:$item");
            $stmt->bindParam(":".$item, $valor, PDO:: PARAM_STR);
            $stmt->execute();

            return $stmt->fetch();
        }
    }
    

?>