<?php

if(!empty($_POST["btn-sign-in"])){
    
    if(!empty($_POST["usuario"]) and !empty($_POST["password"])){
        $usuario = $_POST["usuario"];
        $pass = $_POST["password"];

        $sql = $conexion ->query ("select * from usuarios where usuario ='$usuario' and pass = '$pass' ");
        if($datos = $sql ->fetch_object()){
            header ("location: inicio.php");
        }else {
            echo "<div class='alert'>Acceso Denegado</div>";
        }  
    }else{
        echo "Campos Vacios";
    }

}
?>