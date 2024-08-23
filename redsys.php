<?php
include_once "header.php";
?>
<section class="bloque-general">
    <picture class="bloque-img">
        <img class="img3" src="media/datos-operaciones.jpg" alt="">
    </picture>
    <section class="bloque-Form">
        <h1>Datos Bancanrios</h1>

        <form action="pagoRedsys.php" method="post">
            <p>
                <label for="tarjeta">Número de Tarjeta</label>
                <input type="text" name="tarjeta" required>
            </p>

            <p>
                <label for="caducidad">Fecha de Caducidad</label>
                <input type="text" name="caducidad" required placeholder="MM/AA">
            </p>

            <p>
                <label for="cvv">CVV</label>
                <input type="text" name="cvv" required>
            </p>

            <p class="btn-datos">
                <a class="btn-volver" href="tramitarPedido.php">Volver</a>
                <input class="btn-volver" type="submit" value="Pagar" name="pagar">
            </p>

        </form>
    </section>
</section>

</body>
</html>