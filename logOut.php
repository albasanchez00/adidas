<?php
session_start();
unset($_SESSION["usuario"]);
unset($_SESSION["carrito"]);
//session_destroy(); //Elimina las variables de inicio de sesion
header('Location:index.php');