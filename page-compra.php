<?php $page_name = "purchase" ?>
<?php include('header.php'); ?>

<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li class="back"><a href="#">Volver</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="purchase">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="form-container">
                    <form>
                        <div>
                            <h3 class="subtitle">Datos de facturación</h3>
                            <div class="input-container">
                                <label for="name">Nombre</label>
                                <input id="name" name="name" type="text">
                            </div>
                            <div class="input-container">
                                <label for="last-name">Apellido</label>
                                <input id="last-name" name="nalast-nameme" type="text">
                            </div>
                            <div class="input-container">
                                <label for="email">Tu email</label>
                                <input id="email" name="email" type="email">
                            </div>
                            <div class="input-container">
                                <label for="email-confirm">Confirmar email</label>
                                <input id="email-confirm" name="email-confirm" type="email">
                            </div>
                            <div class="input-container">
                                <label for="dni">DNI</label>
                                <input id="dni" name="dni" type="text">
                            </div>
                            <div class="input-container">
                                <label for="country">País</label>
                                <input id="country" name="country" type="text">
                            </div>
                            <div class="input-container">
                                <label for="telefono">Telefono</label>
                                <input id="telefono" name="telefono" type="tel">
                            </div>
                        </div>
                        <div>
                            <h3 class="subtitle">Datos del viajero</h3>
                            <div class="checkbox-container">
                                 <label for="mismos-datos">
                                     <input type="checkbox" id="mismos-datos" value="mismos-datos">
                                    <span class="checkmark"></span>
                                    Mismos que los datos de facturación
                                </label>
                            </div>
                            <div class="line"></div>
                        </div>
                        <div>
                            <h3 class="subtitle">Seleccioná una forma de pago</h3>
                            <p class="green">Los pagos son seguros y están encriptados</p>
                            <div class="line"></div>
                            <div class="checkbox-container">
                                <label for="credito">
                                    <input type="radio"  name="payment" id="credito" value="credito"> 
                                    <span class="checkmark"></span>
                                    Tarjeta de crédito
                                </label>
                            </div>
                            <div class="input-container">
                                <label for="titular">Titular de la tarjeta</label>
                                <input id="titular" name="titular" type="text">
                            </div>
                            <div class="input-container">
                                <label for="numero">Número de la tarjeta</label>
                                <input id="numero" name="numero" type="text">
                            </div>
                            <div class="input-container">
                                <label for="fecha">Fecha de caducidad</label>
                                <input id="fecha" name="fecha" type="text">
                            </div>
                            <div class="input-container">
                                <label for="codigo">Código de seguridad</label>
                                <input id="codigo" name="codigo" type="text">
                            </div>
                            <div class="line"></div>
                            <div class="checkbox-container">
                                <label for="debito">
                                     <input type="radio"  name="payment" id="debito" value="debito">
                                    <span class="checkmark"></span>
                                    Tarjeta de débito
                                </label>
                            </div>
                            <div class="line"></div>
                            <div class="checkbox-container">
                                <label for="mercado-pago">
                                     <input type="radio"  name="payment" id="mercado-pago" value="mercado-pago">
                                    <span class="checkmark"></span>
                                    Mercado Pago
                                </label>
                            </div>
                            <div class="line"></div>
                        </div>
                        <div>
                            <h3 class="subtitle">Agregar a tu reserva</h3>
                            <div class="line"></div>
                            <div class="checkbox-container">
                                <label for="vianda">
                                     <input type="checkbox" id="vianda" value="vianda">
                                    <span class="checkmark"></span>
                                    Vianda
                                </label>
                            </div>
                            <div class="checkbox-container">
                                <label for="tour">
                                     <input type="checkbox" id="tour" value="tour">
                                    <span class="checkmark"></span>
                                    Tour guiado
                                </label>
                            </div>
                            <div class="checkbox-container">
                                <label for="parque">
                                    <input type="checkbox" id="parque" value="parque">
                                    <span class="checkmark"></span>
                                    Entrada al parque nacional
                                </label>
                            </div>
                            <div class="line"></div>
                        </div>
                        <div>
                            <h3 class="subtitle">Resumen de reservas</h3>
                            <div class="detail">
                                <div class="d-flex">
                                    <div class="featured-image"><img src="img/imgcarritodecompra.jpg" class="img-responsive"></div>
                                    <div class="content">
                                        <ul class="stars">
                                            <li><img src="img/star.png" width="25"></li>
                                            <li><img src="img/star.png" width="25"></li>
                                            <li><img src="img/star.png" width="25"></li>
                                            <li><img src="img/star.png" width="25"></li>
                                            <li><img src="img/star.png" width="25"></li>
                                            <li><p>5 / 5</p></li>
                                        </ul>
                                        <div class="name">Glaciar Perito Moreno</div>
                                        <p>Incluye: </p>
                                        <p>Traslados: Pick up por hoteles centricos</p>
                                        <p>Personas: 2 adultos</p>
                                        <p>Fecha: 20/07/19</p>
                                        <div class="price">
                                            <div class="number"><span>$</span>1000</div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="checkbox-container">
                                <label for="news">
                                    <input type="checkbox" id="news" value="news">
                                    <span class="checkmark"></span>
                                    Quiero recibir e-mails con ofertas y novedades sobre viajes
                                </label>
                            </div>
                        </div>
                       <div class="price d-flex justify-content-between align-items-center">
                            <p>Precio total</p>
                            <div class="number"><span>$</span>1000</div>
                        </div>
                        <div class="text-right">
                            <input type="submit" class="btn pay" href="page-carrito.php" value="pagar">
                        </div>
                    </form>
                </div>
                
            </div>
            <div class="col-md-5">
                <div class="detail small">
                    <h3 class="subtitle">Detalle de la compra</h3>
                    <div>
                        <img src="img/slide1.jpg" class="img-responsive image">
                        <div class="content">
                            <ul class="stars">
                                <li><img src="img/star.png" width="25"></li>
                                <li><img src="img/star.png" width="25"></li>
                                <li><img src="img/star.png" width="25"></li>
                                <li><img src="img/star.png" width="25"></li>
                                <li><img src="img/star.png" width="25"></li>
                                <li><p>5 / 5</p></li>
                            </ul>
                            <div class="name">Glaciar Perito Moreno</div>
                            <p>Incluye: </p>
                            <p>Traslados: Pick up por hoteles centricos</p>
                            <p>Personas: 2 adultos</p>
                            <p>Fecha: 20/07/19</p>
                            <div class="price d-flex justify-content-between align-items-center">
                                <p>Precio total</p>
                                <div class="number"><span>$</span>1000</div>
                            </div>
                            <div class="seguridad">
                                <div class="name">Seguridad de los datos</div>
                                <p>Protegemos tu información. Todos los datos están encriptados y se transmiten de forma segura usando un protocolo SSL.</p>
                                <p>Patagonia Dreams respeta tu privacidad. No vendemos a nadie tu información personal.</p>
                            </div>
                            <div class="reserva">
                                <div class="name">¡Reservá con conﬁanza!</div>
                                <ul class="included">
                                    <li>Mejor precio garantizado. </li>
                                    <li>Sin preocupaciones. Reserva ahora para evitar las colas y asegurar tu plaza.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include('footer.php'); ?>