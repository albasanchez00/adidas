<?php
session_start();
if(isset($_SESSION['user'])){


?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Bienvenido a la Aplicación de ventas</h1>
    <?php
        echo "Bienvenido ".$_SESSION['user'];
    ?>
</body>
</html>
<?php
}else{
    header('Location: login.php?mensaje=No tienes permiso para acceder a esta página');
}
    ?>