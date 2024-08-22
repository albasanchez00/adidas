<?php
include "header.php";

//Leo lo que se añade al carrito

?>
<video src="media/adidas-productos-de-baloncesto.mp4" loop muted autoplay class="video"></video>
    <div>
        <div id="mujer">
        <!--  Es muy utilizado en php input type=hidden -> Para pasar parametro, pero no los muestra (metodo GET o POST).  -->
            <h2 class="titulo_secc">Sección Mujer</h2>
            <div class="responsive">
                <div class="galeria">
                        <a href="media/conjunto-mujer-pilates-adidas.webp">
                            <img src="media/conjunto-mujer-pilates-adidas.webp" alt="Conjunto Adidas" class="galeria-item">
                        </a>
                        <div class="descripcion">85€</div>
                        <form action="carrito.php" method="post">
                            <input type="hidden" name="id-producto" value="1">
                            <input type="hidden" name="nombre-producto" value="Conjunto mujer pilates Adidas">
                            <input type="hidden" name="precio" value="85">
                            <p class="cantidad">
                                <label for="cantidad">Cantidad</label>
                                <input type="number" name="cantidad" id="cantidad" value="1" min="1">
                            </p>
                            <input type="submit" name="agregar" value="Comprar" class="boton">
                        </form>
                </div>
            </div>

            <div class="responsive">
                <div class="galeria">
                    <a href="media/malla-corta-mujer-rosa-adidas.webp">
                        <img src="media/malla-corta-mujer-rosa-adidas.webp" alt="Mallas Mujer Adidas" class="galeria-item">
                    </a>
                    <div class="descripcion">85€</div>
                    <form action="carrito.php" method="post">
                        <input type="hidden" name="id-producto" value="2">
                        <input type="hidden" name="nombre-producto" value="Mallas Mujer Adidas">
                        <input type="hidden" name="precio" value="85">
                        <p class="cantidad">
                            <label for="cantidad">Cantidad</label>
                            <input type="number" name="cantidad" id="cantidad" value="1" min="1" >
                        </p>
                        <input type="submit" name="agregar" value="Comprar" class="boton">
                    </form>
                </div>
            </div>

            <div class="responsive">
                <div class="galeria">
                    <a href="media/chandal-mujer-adidas-rojo.webp">
                        <img src="media/chandal-mujer-adidas-rojo.webp" alt="Chandal Mujer Adidas" class="galeria-item">
                    </a>
                    <div class="descripcion">85€</div>
                    <form action="carrito.php" method="post">
                        <input type="hidden" name="id-producto" value="3">
                        <input type="hidden" name="nombre-producto" value="Chandal Mujer pilates Adidas">
                        <input type="hidden" name="precio" value="85">
                        <p class="cantidad">
                            <label for="cantidad">Cantidad</label>
                            <input type="number" name="cantidad" id="cantidad" value="1" min="1" >
                        </p>
                        <input type="submit" name="agregar" value="Comprar" class="boton">
                    </form>
                </div>
            </div>

            <div class="responsive">
                <div class="galeria">
                    <a href="media/bañador-mujer-prenatal-adidas.webp">
                        <img src="media/bañador-mujer-prenatal-adidas.webp" alt="Bañador Pre-Mama Adidas" class="galeria-item">
                    </a>
                    <div class="descripcion">85€</div>
                    <form action="carrito.php" method="post">
                        <input type="hidden" name="id-producto" value="4">
                        <input type="hidden" name="nombre-producto" value="Bañador Pre-Mama Adidas">
                        <input type="hidden" name="precio" value="85">
                        <p class="cantidad">
                            <label for="cantidad">Cantidad</label>
                            <input type="number" name="cantidad" id="cantidad" value="1" min="1" >
                        </p>
                        <input type="submit" name="agregar" value="Comprar" class="boton">
                    </form>
                </div>
            </div>
        </div>

        <div id="hombre">
            <h2 class="titulo_secc">Sección Hombre</h2>
            <div class="responsive">
                <div class="galeria">
                    <a href="media/chandal-verde-hombre-adidas.webp">
                        <img src="media/chandal-verde-hombre-adidas.webp" alt="Chandal Verde Adidas" class="galeria-item">
                    </a>
                    <div class="descripcion">85€</div>
                    <form action="carrito.php" method="post">
                        <input type="hidden" name="id-producto" value="5">
                        <input type="hidden" name="nombre-producto" value="Chandal Verde Hombre Adidas">
                        <input type="hidden" name="precio" value="85">
                        <p class="cantidad">
                            <label for="cantidad">Cantidad</label>
                            <input type="number" name="cantidad" id="cantidad" value="1" min="1" >
                        </p>
                        <input type="submit" name="agregar" value="Comprar" class="boton">
                    </form>
                </div>
            </div>
            <div class="responsive">
                <div class="galeria">
                    <a href="media/bañador-adidas-negro-hombre.webp">
                        <img src="media/bañador-adidas-negro-hombre.webp" alt="Bañador Hombre Adidas" class="galeria-item">
                    </a>
                    <div class="descripcion">85€</div>
                    <form action="carrito.php" method="post">
                        <input type="hidden" name="id-producto" value="6">
                        <input type="hidden" name="nombre-producto" value="Bañador Hombre Adidas">
                        <input type="hidden" name="precio" value="85">
                        <p class="cantidad">
                            <label for="cantidad">Cantidad</label>
                            <input type="number" name="cantidad" id="cantidad" value="1" min="1" >
                        </p>
                        <input type="submit" name="agregar" value="Comprar" class="boton">
                    </form>
                </div>
            </div>

            <div class="responsive">
                <div class="galeria">
                    <a href="media/malla-termicas-adidas-hombre.webp">
                        <img src="media/malla-termicas-adidas-hombre.webp" alt="Malla Hombre Adidas" class="galeria-item">
                    </a>
                    <div class="descripcion">85€</div>
                    <form action="carrito.php" method="post">
                        <input type="hidden" name="id-producto" value="7">
                        <input type="hidden" name="nombre-producto" value="Malla Hombre Adidas">
                        <input type="hidden" name="precio" value="85">
                        <p class="cantidad">
                            <label for="cantidad">Cantidad</label>
                            <input type="number" name="cantidad" id="cantidad" value="1" min="1" >
                        </p>
                        <input type="submit" name="agregar" value="Comprar" class="boton">
                    </form>
                </div>
            </div>

            <div class="responsive">
                <div class="galeria">
                    <a href="media/abrigo-hombre-gris-adidas.webp">
                        <img src="media/abrigo-hombre-gris-adidas.webp" alt="Abrigo Hombre Adidas" class="galeria-item">
                    </a>
                    <div class="descripcion">85€</div>
                    <form action="carrito.php" method="post">
                        <input type="hidden" name="id-producto" value="8">
                        <input type="hidden" name="nombre-producto" value="Abrigo Hombre Adidas">
                        <input type="hidden" name="precio" value="85">
                        <p class="cantidad">
                            <label for="cantidad">Cantidad</label>
                            <input type="number" name="cantidad" id="cantidad" value="1" min="1" >
                        </p>
                        <input type="submit" name="agregar" value="Comprar" class="boton">
                    </form>
                </div>
            </div>
        </div>


        <div id="infantil">
            <h2 class="titulo_secc">Sección Infantil</h2>
            <div class="responsive">
                <div class="galeria">
                    <a href="media/conjunto-adidas-infantil.avif">
                        <img src="media/conjunto-adidas-infantil.avif" alt="Chandal Infantil Adidas" class="galeria-item">
                    </a>
                    <div class="descripcion">85€</div>
                    <form action="carrito.php" method="post">
                        <input type="hidden" name="id-producto" value="9">
                        <input type="hidden" name="nombre-producto" value="Chandal Infantil Adidas">
                        <input type="hidden" name="precio" value="85">
                        <p class="cantidad">
                            <label for="cantidad">Cantidad</label>
                            <input type="number" name="cantidad" id="cantidad" value="1" min="1" >
                        </p>
                        <input type="submit" name="agregar" value="Comprar" class="boton">
                    </form>
                </div>
            </div>

            <div class="responsive">
                <div class="galeria">
                    <a href="media/infantil-unisex-camiseta-verde.avif">
                        <img src="media/infantil-unisex-camiseta-verde.avif" alt="Camiseta Verde Infantil Adidas" class="galeria-item">
                    </a>
                    <div class="descripcion">85€</div>
                    <form action="carrito.php" method="post">
                        <input type="hidden" name="id-producto" value="10">
                        <input type="hidden" name="nombre-producto" value="Camiseta Verde Infantil Adidas">
                        <input type="hidden" name="precio" value="85">
                        <p class="cantidad">
                            <label for="cantidad">Cantidad</label>
                            <input type="number" name="cantidad" id="cantidad" value="1" min="1" >
                        </p>
                        <input type="submit" name="agregar" value="Comprar" class="boton">
                    </form>
                </div>
            </div>

            <div class="responsive">
                <div class="galeria">
                    <a href="media/abrigo-gris-infantil.avif">
                        <img src="media/abrigo-gris-infantil.avif" alt="Abrigo Infantil Adidas" class="galeria-item">
                    </a>
                    <div class="descripcion">85€</div>
                    <form action="carrito.php" method="post">
                        <input type="hidden" name="id-producto" value="11">
                        <input type="hidden" name="nombre-producto" value="Abrigo Infantil Adidas">
                        <input type="hidden" name="precio" value="85">
                        <p class="cantidad">
                            <label for="cantidad">Cantidad</label>
                            <input type="number" name="cantidad" id="cantidad" value="1" min="1" >
                        </p>
                        <input type="submit" name="agregar" value="Comprar" class="boton">
                    </form>
                </div>
            </div>

            <div class="responsive">
                <div class="galeria">
                    <a href="media/calcetines-marvel-infantil.avif">
                        <img src="media/calcetines-marvel-infantil.avif" alt="Chandal Infantil Adidas" class="galeria-item">
                    </a>
                    <div class="descripcion">85€</div>
                    <form action="carrito.php" method="post">
                        <input type="hidden" name="id-producto" value="12">
                        <input type="hidden" name="nombre-producto" value="Chandal Infantil Adidas">
                        <input type="hidden" name="precio" value="85">
                        <p class="cantidad">
                            <label for="cantidad">Cantidad</label>
                            <input type="number" name="cantidad" id="cantidad" value="1" min="1" >
                        </p>
                        <input type="submit" name="agregar" value="Comprar" class="boton">
                    </form>
                </div>
            </div>
        </div>


        <div id="calzado">
            <h2 class="titulo_secc">Sección Calzado</h2>
            <div class="responsive">
                <div class="galeria">
                    <a href="media/zapatilla-basket-profi.webp">
                        <img src="media/zapatilla-basket-profi.webp" alt="Deportivas Basket Adidas" class="galeria-item">
                    </a>
                    <div class="descripcion">85€</div>
                    <form action="carrito.php" method="post">
                        <input type="hidden" name="id-producto" value="13">
                        <input type="hidden" name="nombre-producto" value="Deportivas Basket Hombre Adidas">
                        <input type="hidden" name="precio" value="85">
                        <p class="cantidad">
                            <label for="cantidad">Cantidad</label>
                            <input type="number" name="cantidad" id="cantidad" value="1" min="1" >
                        </p>
                        <input type="submit" name="agregar" value="Comprar" class="boton">
                    </form>
                </div>
            </div>

            <div class="responsive">
                <div class="galeria">
                    <a href="media/zapatilla-blanco-azul-infantil.avif">
                        <img src="media/zapatilla-blanco-azul-infantil.avif" alt="Deportivas Infantiles Adidas" class="galeria-item">
                    </a>
                    <div class="descripcion">85€</div>
                    <form action="carrito.php" method="post">
                        <input type="hidden" name="id-producto" value="14">
                        <input type="hidden" name="nombre-producto" value="Deportivas Infantiles Adidas">
                        <input type="hidden" name="precio" value="85">
                        <p class="cantidad">
                            <label for="cantidad">Cantidad</label>
                            <input type="number" name="cantidad" id="cantidad" value="1" min="1" >
                        </p>
                        <input type="submit" name="agregar" value="Comprar" class="boton">
                    </form>
                </div>
            </div>

            <div class="responsive">
                <div class="galeria">
                    <a href="media/zapatilla-stan-smith.webp">
                        <img src="media/zapatilla-stan-smith.webp" alt="Deportivas Basket Adidas" class="galeria-item">
                    </a>
                    <div class="descripcion">85€</div>
                    <form action="carrito.php" method="post">
                        <input type="hidden" name="id-producto" value="15">
                        <input type="hidden" name="nombre-producto" value="Deportivas Basket Hombre Adidas">
                        <input type="hidden" name="precio" value="85">
                        <p class="cantidad">
                            <label for="cantidad">Cantidad</label>
                            <input type="number" name="cantidad" id="cantidad" value="1" min="1" >
                        </p>
                        <input type="submit" name="agregar" value="Comprar" class="boton">
                    </form>
                </div>
            </div>

            <div class="responsive">
                <div class="galeria">
                    <a href="media/chanclas-blacas-adidas-de-hombre.jpg">
                        <img src="media/chanclas-blacas-adidas-de-hombre.jpg" alt="Deportivas Basket Adidas" class="galeria-item">
                    </a>
                    <div class="descripcion">85€</div>
                    <form action="carrito.php" method="post">
                        <input type="hidden" name="id-producto" value="16">
                        <input type="hidden" name="nombre-producto" value="Deportivas Basket Hombre Adidas">
                        <input type="hidden" name="precio" value="85">
                        <p class="cantidad">
                            <label for="cantidad">Cantidad</label>
                            <input type="number" name="cantidad" id="cantidad" value="1" min="1" >
                        </p>
                        <input type="submit" name="agregar" value="Comprar" class="boton">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>