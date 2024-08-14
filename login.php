<?php
include "header.php";
if (isset($_SESSION['usuario'])) {
?>

<div class="container">
    <form action="controlador.php" method="post">
        <label for="usuario">Usuario</label>
        <input type="text" id="usuario" name="usuario" required>
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" class="boton" name="Aceptar" value="Iniciar Sesion">




    </form>
</div>




<?php
}
?>
