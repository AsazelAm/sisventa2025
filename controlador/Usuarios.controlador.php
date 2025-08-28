<?php
    class ControladorUsuarios
    {
        public function ctrIngresarUsuario()
        {
            //Programar siguiente clase
            if(isset($_POST["imgUsuario"]))
            {
                if(preg_match('/^[a-zA-Z0-9]+$/',$_POST["imgUsuario"])&& 
                preg_match('/^[a-zA-Z0-9]+$/',$_POST["imgPassword"]))
                {
                    $tabla="usuarios";
                    $item="usuario";
                    $valor = $_POST["imgUsuario"];
                    $respuesta = ModeloUsuarios :: MdlMostrarUsuarios($tabla,$item, $valor);
                    //Comparacion de variables o campos de la tabla de usuario
                    if($respuesta["usuario"]==$_POST["imgUsuario"] &&  $respuesta["password"]== $_POST["imgPassword"])
                    {
                        $_SESSION['IniciarSesion']= "ok";
                        echo'<script>window.location="inicio";</script>';

                    }
                    else
                    {
                        echo '<br><div class="alert alert-danger">Error al entrar al sistema</div> ';
                    }
                }
            }
        }
        public function ctrRegistrarUsuario()
        {
            
        }
    }

?>