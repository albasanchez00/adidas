<?php
session_start();
if (isset($_POST["agregar"])){
    $productoID = $_POST["id-producto"];
    $nombreProducto = $_POST["nombre-producto"];
    $precioProducto = $_POST["precio"];
    $cantidadProducto = $_POST["cantidad"];
    var_dump($cantidadProducto);


    // El carrito es una variable de sesión
    if (!isset($_SESSION["carrito"])){
        $_SESSION["carrito"] = array();
    }

    //Si está creada la sesión del carrito con ese producto, aumentaremos la cantidad.
    if (isset($_SESSION["carrito"][$productoID])){
        $_SESSION["carrito"][$productoID]["cantidad"]+=$cantidadProducto;
    } else{
        //Se agrega el producto porque no existen en el carrito.
        $_SESSION["carrito"][$productoID] = array(
            "nombre" => $nombreProducto,
            "precio" => $precioProducto,
            "cantidad" => $cantidadProducto
        );
    }
    $totalProducto = 0;
    foreach ($_SESSION["carrito"] as $productoID => $producto){
        $_SESSION["totalProducto"] += $producto["cantidad"];
    }
    header('Location: index.php');
}