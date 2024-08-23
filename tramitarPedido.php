<?php
include 'header.php';
?>
<!--
* 1. Crear Formularo en el que pidamos: Nombre, Correo, Numero tlfno y Dirección
* 2. Verificar que los datos introducidos esten escritos en el formato que deben.
* 3. Seleccionar metodo de pago -> Redsys o Paypal
* 4. Segun Metodo de Pago:
*      - Redsys -> Creamos pagina de pago con y realizamos comprobaciones:
*                  - Nº Tarjeta
*                  - Fecha Caducidad
*                  - CVV
*      - Paypal -> Redirigimos a Paypal
*/-->
<section class="bloque-general">
    <picture class="bloque-img">
        <h2>Metodos de pago</h2>
        <img class="img2" src="media/pagos-logo-redsys.jpg" alt="formas de pago">
    </picture>

    <section class="bloque-Form">
        <h1 class="textoCentrado">Finalizar Pedido</h1>

        <form class="form-pedido" action="formPagos.php" method="post">
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" required>
            </p>


            <p>
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" required minlength="10">
            </p>

            <p>
                <label for="tlfno">Teléfono</label>
                <input type="tel" name="tlfno" required>
            </p>

            <p>
                <label for="email">Email</label>
                <input type="text" name="email" required>
            </p>

            <p>
                <label for="metodo_pago">Método de Pago:</label><br>
                <input type="radio" id="redsys" name="metodo_pago" value="redsys" required>
                <label for="redsys">Redsys</label><br>
                <input type="radio" id="paypal" name="metodo_pago" value="paypal" required>
                <label for="paypal">PayPal</label><br>
            </p>

            <p class="btn-datos">
                <a class="btn-volver" href="mostrarCarrito.php">Volver</a>
                <input class="btn-volver" type="submit" value="Siguiente">
            </p>

        </form>
    </section>
</section>

</body>
</html>