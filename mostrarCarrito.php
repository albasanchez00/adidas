<?php
include 'header.php';
?>


<div class="cesta">
   <h2 class="textoCentrado">Resumen de tu Carrito</h2>

    <?php
        if(isset($_SESSION['carrito'])){
    ?>

          <table>
              <tr>
                  <th>Producto</th>
                  <th>Cantidad</th>
                  <th>Precio</th>
                  <th>Total</th>
                  <th>Acción</th>
              </tr>

              <?php
                /*
                Hay que llamar el $_SESSION["carrrito"] y recorrerlo por medio de un forEach para mostrar los datos de los productos, y a la vez calcular los subtotales y total general

                También se crea unos botones de actualizar que permite cambiar el numero de articulos por linea y Eliminar toda linea de producto de la cesta, y dinalmente eliminar la cesta completa.
                */

              $total = 0; //Iniciamos el total
              foreach($_SESSION['carrito'] as $productoID => $producto){
                  $subtotal = $producto['precio'] * $producto['cantidad'];
                  $total += $subtotal;
              ?>

              <tr>
                  <td>
                      <?php echo $producto["nombre"]?>
                  </td>

                  <td>
                      <form action="carrito.php" method="post">
                      <input type="hidden" name="id" value="<?php echo $productoID?>">
                      <input type="number" name="cantidad" value="<?php echo $producto["cantidad"]?>" min="1">
                        <!-- Permitir actualizar el número de productos -->
                          <input type="submit" name="actualizarCarrito" value="Actualizar">
                      </form>
                  </td>

                  <td>
                      <?php echo $producto["precio"]?>€
                  </td>

                  <td>
                      <?php echo $subtotal?>€
                  </td>

                  <td>
                      <form class="btn-form" action="carrito.php" method="post">
                          <input type="hidden" name="id" value="<?php echo $productoID?>">
                          <input class="btn-eliminar" type="submit" name="eliminarProducto" value="Eliminar">
                      </form>
                  </td>

              </tr>

              <?php
              } //cirere forEach
              ?>

              <tr>
                  <td colspan="3">
                      Total
                  </td>
                  <td>
                      <?php echo $total?>€
                  </td>
                  <td>
                      <form class="btn-form" action="carrito.php" method="post">
                          <input class="btn-eliminar" type="submit" name="eliminarCarrito" value="Vaciar Cesta">
                      </form>
                  </td>
              </tr>
          </table>
          <div>
              <a class="btn-carrito" href="mostrarCarrito.php">Volver</a>
              <a class="btn-carrito" href="tramitarPedido.php">Tramitar Pedido</a>
          </div>


    <?php
        }else{
            echo "Tu carrito está vacío";
        }
    ?>
</div>
<div>
    <?php
        if (isset($_GET['mensaje'])) {
            echo $_GET['mensaje'];

        }
        ?>
</div>
</body>
</html>
