<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section>
        <div>
            <h1>Inicio Sesión</h1>
            <form action="lectura.php" method="post">
                <p class="bloque_log">
                    <input type="text" name="usuario" id="nombre" placeholder="Usuario">
                </p>
                <p class="bloque_log">
                    <input type="password" name="password" id="password" placeholder="Contraseña">
                </p>

                <input type="submit" value="Registrar" id="botonEnviar">
                <input type="reset" value="Borrar" id="botonBorrar">
            </form>
            <?php
            if (!empty($_GET['mensaje'])) {
                echo $_GET['mensaje'];
            }
            ?>
        </div>
    </section>
</body>
</html>