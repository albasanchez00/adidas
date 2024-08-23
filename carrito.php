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
    $_SESSION["totalProducto"]= 0;
    foreach ($_SESSION["carrito"] as $productoID => $producto){
        $_SESSION["totalProducto"] += $producto["cantidad"];
    }

    actualizarCesta();
    header('Location: index.php');
}




/* Función que cuenta los astículos que estan en la cesta para mostrarlos en el header */
function actualizarCesta()
{
    $_SESSION["totalProducto"]= 0;
    foreach ($_SESSION["carrito"] as $productoID => $producto){
        $_SESSION["totalProducto"] += $producto["cantidad"];
    }
}

// Vaciar Cesta
if (isset($_POST["eliminarCarrito"])){
    unset($_SESSION["carrito"]); // Elimina el Array -> $_SESSION["carrito"]

    actualizarCesta();
    header('Location: mostrarCarrito.php');
}

// Actualizar Cantidad Artículos
if (isset($_POST["actualizarCarrito"])){
    $id=$_POST["id"];
    $cantidad=$_POST["cantidad"];

    if (isset($_SESSION["carrito"][$id])){ //Ubica el id en el Array
        $_SESSION["carrito"][$id]["cantidad"]=$cantidad;
    }

    actualizarCesta();
    header('Location: mostrarCarrito.php');
}

// Eliminar Producto en Línea
if (isset($_POST["eliminarProducto"])){
    $id=$_POST["id"]; //Necesitamos el id para buscarlo y eliminarlo del array

    unset($_SESSION["carrito"][$id]); // Eliminando un valor del array

    actualizarCesta();
    header('Location: mostrarCarrito.php');
}