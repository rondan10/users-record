<?php

if(!empty($_POST["btn-sign-up"])){
    
    if(!empty($_POST["usuario"]) and !empty($_POST["mail"]) and !empty($_POST["password"])){
        $usuario = $_POST["usuario"];
        $email = $_POST["mail"];
        $pass = $_POST["password"];

        $sql = $conexion ->query ("insert into usuarios (usuario,email,pass) values ('$usuario','$email','$pass');");
        if($sql ==TRUE){
            echo "<div class='alert'>Ingresado Correctamente</div>";
        }else {
            echo "<div class='alert'>Error</div>";
        }  
    }else{
        echo "Campos Vacios";
    }

}
?>