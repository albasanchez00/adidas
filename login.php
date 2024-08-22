<?php
include "header.php";
if (!isset($_SESSION["usuario"])){
?>
<div id="container-inicio">
    <div class="container">
        <h2 class="textoCentrado">Inicio Sesión</h2>
        <form class="formularios" action="controlador.php" method="post">
            <label for="usuario">Usuario</label>
            <input type="text" id="usuario" name="usuario" required>
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" class="boton" name="iniciarSesion" value="Iniciar Sesion">
        </form>
        <?php
        if (isset($_GET['mensaje'])) {
            echo $_GET['mensaje'];
        }
        }
        ?>
    </div>

    <div class="container-2">
        <h2 class="textoCentrado">Registrarse</h2>
        <form class="formularios" action="controlador.php" method="post">
            <label for="usuario">Usuario</label>
            <input type="text" id="usuario" name="usuario" required>
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>
            <label for="password2">Repetir Contraseña</label>
            <input type="password" id="password2" name="password2" required>
            <input type="submit" class="boton" name="crearUsuario" value="Crear Usuario">
        </form>
    </div>
</div>



