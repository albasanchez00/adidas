<?php
session_start();
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adidas</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="media/favicon.png">
</head>
<body>
<div class="header">
    <img src="media/logo-adidas.webp" alt="Logo Adidas" class="img">

    <div class="iconos-header">
        <?php
        if (isset($_SESSION['usuario'])) {
            echo "<a class='fondo' href='logOut.php'>"."<img src='media/icono-logout-blanco.svg' class='icono'>".$_SESSION['usuario']."</a>";
        }else{
        ?>
            <a class='fondo' href="login.php"><img src="media/icono-login-blanco.svg" alt="Iniciar Sesión" class="icono"></a>
        <?php
        }?>

        <a class="fondo" href="mostrarCarrito.php"><img src="media/icono-caritto-blanco.svg" alt="Resumen de la Compra" class="icono">
        <?php
        if (isset($_SESSION['totalProducto'])) {
            echo $_SESSION['totalProducto'];
        }
        ?>
        </a>
    </div>
</div>

<nav>
    <!--menu resepctivo-->
    <div class="menu">
        <a href="index.php#mujer">Mujer</a>
        <a href="index.php#hombre">Hombre</a>
        <a href="index.php#infantil">Infantil</a>
        <a href="index.php#calzado">Calzado</a>
    </div>
</nav>