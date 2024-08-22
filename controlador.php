<?php
session_start();
$mensaje="";

// Si hacen clic en Iniciar Sesión se ejecuta las siguientes líneas ->
if (isset($_POST['iniciarSesion'])) {
    if (empty($_POST["usuario"])||empty($_POST["password"])){
    $mensaje="Por favor ingresa todos los campos";
    enviarMensajeError($mensaje);

    }else{
        if(validarUsuario($_POST["usuario"],$_POST["password"])){
            $_SESSION["usuario"]=$_POST["usuario"];
            header("Location:index.php");

        }else{
            $mensaje="Los datos no son correctos";
            enviarMensajeError($mensaje);
        }
    }
}

// Si hacen clic en Crear Usuario se ejecuta las siguientes lineas ->
if (isset($_POST["crearUsuario"])){
    global $listaUsuarios;
    if (!empty($_POST["usuario"]) && !empty($_POST["password"]) && !empty($_POST["password2"])){
        $nombre = $_POST["usuario"];
        $password = $_POST["password"];
        $password2 = $_POST["password2"];

        if ($password == $password2){
            if (!isset($_SESSION["listaUsuarios"])){
                $_SESSION["listaUsuarios"]=array();
            }
            $_SESSION["listaUsuarios"][$nombre]= $password;
            $mensaje="Usuario creado correctamente";
            enviarMensajeError($mensaje);
        }else{
            $mensaje="Las passwords no coinciden";
            enviarMensajeError($mensaje);
        }
    }
}





// Creamos texto que envie un mensaje en caso de ERROR ->
function enviarMensajeError($mensaje){
    header('Location:login.php?mensaje='.$mensaje);
}

// Creamos una validacion de Usuarios ->
function validarUsuario($usuario, $password)
{
    if (array_key_exists($usuario, $_SESSION["listaUsuarios"])){
        if ($_SESSION["listaUsuarios"][$usuario] == $password) {
            return true;
        } else {
            return false;
        }

    }
}
