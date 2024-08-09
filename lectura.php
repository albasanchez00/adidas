<?php
session_start();
$mensaje="";

/*   1. Verificamos que los datos introducidos no estén en blanco  */
if (empty($_POST["usuario"])||empty($_POST["password"])){
    // Verificamos que no estén vacíos
    $mensaje( "Debes indicar usuario y password");
    enviarMensajeError($mensaje);
}else{
    // Se envía a la funcion validarUsuario con los valores leídos, que comprobará si son correctos y  devuelverá true o false.
    if (validarUsuario($_POST["usuario"],$_POST["password"])){
        //Creamos la variable de SESION y lo enviamos a la página salida.php
        $_SESSION["user"] = $_POST["usuario"];
        header('Location:salida.php');
    }else{
        echo "<br>";
        enviarMensajeError("Datos incorrectos");
    }
}

function enviarMensajeError($mensaje){
    header('Location: login.php?mensaje='.$mensaje);
}

function validarUsuario($usuario, $password) {
    $listaUsuarios = ["Daniel" => "CEAT1234@", "Marina" => "CEAT1234@", "Ana" => "CEAT1234@"];
    if (array_key_exists($usuario, $listaUsuarios)) {
        if ($listaUsuarios[$usuario] == $password){
            return true;
        } else {
            return false;
        }

    }
}