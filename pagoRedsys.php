<?php
$regexp='/^(?:4[0-9]{12}(?:[0-9]{3})?           # Visa
                       |  5[1-5][0-9]{14}                    # MasterCard
                       |  3[47][0-9]{13}                     # American Express
                       |  3(?:0[0-5]|[68][0-9])[0-9]{11}     # Diners Club
                       |  6(?:011|5[0-9]{2})[0-9]{12}        # Discover
                       |  (?:2131|1800|35\d{3})\d{11}        # JCB
                       )$/x';
$tarjeta = $_POST['tarjeta'];
$caducidad = $_POST['caducidad'];
$cvv = $_POST['cvv'];
$mensaje="";

//Verificamos Nº Tarjeta ->
if (empty($_POST['tarjeta'])) {
    $mensaje = "El número de tarjeta es obligatorio.";
    enviarMensajeError($_POST['tarjeta']);
}elseif (!preg_match($regexp, $_POST['tarjeta'])) {
    $mensaje = "El número de tarjeta no es válido.";
    enviarMensajeError($mensaje);
}


if (empty($_POST['caducidad'])) {
    $mensaje = "La fecha de caducidad es obligatoria.";
    enviarMensajeError($mensaje);
}elseif (!preg_match("/(0[1-9]|1[0-2])\/[0-9]{2}/", $_POST['caducidad'])) {
    $mensaje = "La fecha introducida no es valida.";
    enviarMensajeError($mensaje);
}


if (empty($_POST['cvv'])) {
    $mensaje = "El numero CVV es obligatoria.";
    enviarMensajeError($mensaje);
}elseif (!preg_match("/^[0-9]{3}$/", $_POST['cvv'])) {
    $mensaje = "El numero CVV no es valido.";
    enviarMensajeError($mensaje);
}else{
    header("Location:index.php");
}




// Creamos texto que envie un mensaje en caso de ERROR ->
function enviarMensajeError($mensaje){
    header('Location:index.php?mensaje='.$mensaje);
}