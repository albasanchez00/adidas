<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['tlfno'];
$direccion = $_POST['direccion'];
$metodo_pago = $_POST['metodo_pago'];
$email = $_POST['email'];
$mensaje ="";


// Validamos el Nombre ->
if (empty($_POST['nombre'])) {
    enviarMensajeError("El nombre es obligatorio.");
} elseif (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{2,50}$/", $_POST['nombre'])) {
    enviarMensajeError("El nombre debe contener solo letras y espacios, y tener entre 2 y 50 caracteres.");
} else {
    // El nombre es válido
    echo "Nombre: " . $_POST['nombre'] . "<br>";
}


if (empty($_POST['telefono'])) {
    $errores[] = "El teléfono es obligatorio.";
} elseif (!preg_match("/^[0-9]{9,15}$/", $telefono)) {
    $errores[] = "El teléfono debe contener solo números y tener entre 9 y 15 dígitos.";
}
// Validamos el Nº Telefono ->


// Validamos la Dirección ->
if (empty($_POST['direccion'])) {
    enviarMensajeError("La dirección es obligatoria.");
}

// Validamos el Email ->
if (empty($_POST['email'])) {
    enviarMensajeError("electrónico es obligatorio.");
} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    enviarMensajeError("El correo electrónico no es válido.");
}


// Procesamiento según el método de pago ->
if ($_POST['metodo_pago'] == "redsys") {
    // Aquí rediriges a la página de Redsys
    header("Location: redsys.php");
    exit();
} elseif ($_POST['metodo_pago'] == "paypal") {
    // Aquí rediriges a la página de PayPal o a la URL de pago
    header("Location: https://www.paypal.com/checkoutnow");
    exit();
}



// Creamos texto que envie un mensaje en caso de ERROR ->
function enviarMensajeError($mensaje){
    header('Location:index.php?mensaje='.$mensaje);
}