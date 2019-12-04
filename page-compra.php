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
                <div class="voucher hidden-xs">
                    <div class="checkbox-container">
                        <label for="codigo">
                             <input type="checkbox" id="codigo" value="codigo">
                            <span class="checkmark"></span>
                            ¡Tengo un código promocional, cupón de regalo o cupón de Profesional!
                        </label>
                    </div>
                    <form>
                        <input type="text" id="code" name="code">
                        <input class="canjear" type="submit" value="Canjear">
                    </form>
                </div>
                <div class="form-container">
                    <form>
                        <div>
                            <h3 class="subtitle">Datos del viajero</h3>
                            <div class="input-container">
                                <label for="name">Nombre</label>
                                <input id="name" name="name" type="text">
                            </div>
                            <div class="input-container">
                                <label for="last-name">Apellido</label>
                                <input id="last-name" name="nalast-nameme" type="text">
                            </div>
                            <div class="input-container">
                                <label for="dni">DNI</label>
                                <input id="dni" name="dni" type="text">
                            </div>
                            <div class="input-container">
                                <label for="nacimiento">Fecha de nacimiento</label>
                                <input id="nacimiento" name="nacimiento" type="text" placeholder="DD/MM/AA">
                            </div>
                            <div class="input-container">
                                <label for="email">Email</label>
                                <input id="email" name="email" type="email">
                            </div>
                            <div class="input-container">
                                <label for="email-confirm">Confirmar email</label>
                                <input id="email-confirm" name="email-confirm" type="email">
                            </div>
                            
                            <div class="input-container">
                                <label for="country">Nacionalidad</label>
                                <input id="country" name="country" type="text">
                            </div>
                            <div class="input-container">
                                <label for="telefono">Telefono</label>
                                <input id="telefono" name="telefono" type="tel">
                            </div>
                        </div>
                        <div>
                            <h3 class="subtitle">Datos de facturación</h3>
                            <div class="checkbox-container">
                                 <label for="mismos-datos">
                                     <input type="checkbox" id="mismos-datos" value="mismos-datos">
                                    <span class="checkmark"></span>
                                    Mismos que los datos del viajero
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
                            <div class="input-container select-container">
                                <label>Seleccioná banco</label>
                                <div class="select" id="selectBanco"></div>
                            </div>
                            <div class="input-container select-container">
                                <label>Seleccioná Tarjeta</label>
                                <div class="select" id="selectTarjeta"></div>
                            </div>
                            <div class="input-container select-container">
                                <label>Opciones de cuotas</label>
                                <div class="select" id="selectCuotas"></div>
                            </div>
                            <div class="input-container">
                                <label for="titular">Titular de la tarjeta</label>
                                <input id="titular" name="titular" type="text" placeholder="Como figura en la tarjeta">
                            </div>
                            <div class="input-container">
                                <label for="numero">Número de la tarjeta</label>
                                <input id="numero" name="numero" type="text" placeholder="Ingresá el número completo de tu tarjeta">
                            </div>
                            <div class="input-container">
                                <label for="fecha">Fecha de caducidad</label>
                                <input id="fecha" name="fecha" type="text" placeholder="MM/AA">
                            </div>
                            <div class="input-container">
                                <label for="codigo">Código de seguridad</label>
                                <input id="codigo" name="codigo" type="text" placeholder="Últimos 3 digitos detrás de la tarjeta">
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
                            <h3 class="subtitle">Datos de los acompañantes</h3>
                            <p>Acompañante 1</p>
                            <div class="input-container">
                                <label for="name">Nombre</label>
                                <input id="name" name="name" type="text">
                            </div>
                            <div class="input-container">
                                <label for="last-name">Apellido</label>
                                <input id="last-name" name="nalast-nameme" type="text">
                            </div>
                            <div class="input-container">
                                <label for="dni">DNI</label>
                                <input id="dni" name="dni" type="text">
                            </div>
                            <div class="input-container">
                                <label for="nacimiento">Fecha de nacimiento</label>
                                <input id="nacimiento" name="nacimiento" type="text" placeholder="DD/MM/AA">
                            </div>
                            <a class="add-acompaniante" href="#">+ Agregar otro acompañante</a>
                        </div>
                        <div>
                            <h3 class="subtitle">¿Querés reservar tus traslados al aeropuerto?</h3>
                            <p>Agregá información sobre tu viaje para que puedas tener una mejor experiencia con el traslado hacia el aeropuerto.</p>
                            <div class="input-container">
                                <label for="name">Nombre</label>
                                <input id="name" name="name" type="text">
                            </div>
                            <div class="input-container">
                                <label for="ida">Fechas</label>
                                <input id="ida" name="ida" type="text" class="half fecha" placeholder="Ida">
                                <input id="vuelta" name="vuelta" type="text" class="half fecha" placeholder="Vuelta">
                            </div>
                            <div class="input-container">
                                <label for="vuelo">Numero de vuelo</label>
                                <input id="vuelo" name="vuelo" type="text">
                            </div>
                        </div>
                        <div>
                            <h3 class="subtitle">¿Ya sabés donde te alojas?</h3>
                            <p>Agregá información sobre tu alojamiento para que puedas tener una mejor experiencia con el traslado de tu actividad.</p>
                            <div class="input-container">
                                <label for="alojamiento">Alojamiento</label>
                                <input id="alojamiento" name="alojamiento" type="text" placeholder="Ingresá el nombre o dirección de tu alojamiento">
                            </div>
                        </div>
                        <div>
                            <p><b>¡Te mantendremos informado vía Email y WhatsApp sobre los detalles de tu compra, y posibles cambios en el itinerario!</b></p>
                            <div class="checkbox-container">
                                <label for="news">
                                     <input type="checkbox" id="news" value="news">
                                    <span class="checkmark"></span>
                                    Quiero recibir e-mails con ofertas y novedades sobre viajes
                                </label>
                            </div>
                            <div class="checkbox-container">
                                <label for="terms">
                                     <input type="checkbox" id="terms" value="terms">
                                    <span class="checkmark"></span>
                                    Al continuar, conﬁrmas que aceptas nuestros <a  href="#" data-toggle="modal" data-target="#terms-conds">términos y condiciones generales.</a>
                                </label>
                            </div>
                        </div>
                        <div>
                            <input type="submit" class="btn pay" href="page-carrito.php" value="pagar">
                        </div>
                    </form>
                </div>
                
            </div>
            <div class="col-md-5">
                
                <div class="detail small">
                        <h3 class="subtitle">Detalle del pago</h3>
                        <div class="detail-item">
                            <p>Excursión Glaciar Perito Moreno</p>
                            <div class="d-flex justify-content-between">
                                <p>Traslado al Glaciar Perito Moreno sin guía.</p>
                                <p>$1.000</p>
                            </div>
                            <a class="lnk-agregar collapsed" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1"> Agregar a tu reserva </a>
                            <div class="collapse reserva" id="collapse1">
                                <div class="card card-body"> 
                                    <div class="d-flex justify-content-between">
                                        <div class="checkbox-container">
                                            <label for="vianda">
                                                 <input type="checkbox" id="Vianda" value="Vianda">
                                                <span class="checkmark"></span>
                                                Vianda
                                            </label>
                                        </div>
                                        <div class="number-picker">
                                            <a class="icon minus"></a>
                                            <input class="steppers-tag" readonly="readonly" tabindex="-1" value="1">
                                            <a class="icon plus"></a>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <a href="3" class="aplicar">Aplicar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="detail-item">
                            <p>Excursión Glaciar Perito Moreno</p>
                            <div class="d-flex justify-content-between">
                                <p>Traslado al Glaciar Perito Moreno sin guía.</p>
                                <p>$1.000</p>
                            </div>
                            <a class="lnk-agregar collapsed" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2"> Agregar a tu reserva </a>
                            <div class="collapse reserva" id="collapse2">
                                <div class="card card-body"> 
                                    <div class="d-flex justify-content-between">
                                        <div class="checkbox-container">
                                            <label for="vianda">
                                                 <input type="checkbox" id="Vianda" value="Vianda">
                                                <span class="checkmark"></span>
                                                Vianda
                                            </label>
                                        </div>
                                        <div class="number-picker">
                                            <a class="icon minus"></a>
                                            <input class="steppers-tag" readonly="readonly" tabindex="-1" value="1">
                                            <a class="icon plus"></a>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <a href="3" class="aplicar">Aplicar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="precio-final d-flex justify-content-between align-items-center">
                            <p><b>Precio final</b></p>
                            <div class="price">
                                <span>$</span>2000
                            </div>
                        </div>
                </div>
                <div class="detail small">
                    <h3 class="subtitle">Detalle de tu compra</h3>
                    <div>
                        <div class="content detail-item">
                             <div class="items">
                                <div class="item duracion ">
                                    <p>20 de septiembre</p>
                                </div>
                                <div class="item comienza ">
                                    <p>A las 9:30hs</p>
                                </div>
                                <div class="item menores ">
                                    <p>2 adultos</p>
                                </div>
                            </div>
                            <p>Que vas a hacer </p><br>
                            <p>Traslado al Glaciar Perito Moreno sin guía. Visite el maravilloso glaciar Perito Moreno y deslúmbrese con lo que la naturaleza tiene para ofrecernos. Lo pasamos a buscar por su Hotel y emprendemos viaje hacia el 
                            Glaciar Perito Moreno, ubicado dentro del Parque Traslado al Glaciar Perito Moreno sin guía. Visite el maravilloso glaciar Perito Moreno y deslúmbrese con lo que la naturaleza tiene para ofrecernos. Lo pasamos a buscar por su Hotel y emprendemos viaje hacia el 
                            Glaciar Perito Moreno, ubicado dentro del Parque Traslado al Glaciar Perito Moreno sin guía. Visite el maravilloso glaciar Perito Moreno y deslúmbrese con lo que la naturaleza tiene para ofrecernos. Lo pasamos a buscar por su Hotel y emprendemos viaje hacia el 
                            Glaciar Perito Moreno, ubicado dentro del Parque</p><br>
                            <p>Incluye</p>
                            <ul class="included">
                                <li>Guía</li>
                                <li>Traslado: pick-up a partir de las 8:45 h</li>
                            </ul><br>
                            <p>Incluye</p>
                            <ul class="not-included">
                                <li>Entradas</li>
                                <li>Comidas</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="detail small no-bg">
                    <div>
                        <div class="content">
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

<div class="modal fade" id="terms-conds" tabindex="-1" role="dialog" aria-labelledby="terms-conds" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="subtitle text-center">Terminos y Condiciones</h3>
        <p>CLAÚSULAS QUE REGULAN LA RELACIÓN ENTRE PARTICULARES, CONSUMIDORES Y/O USUARIOS Y PATAGONIA DREAMS S.R.L</p>
          <p>CLAÚSULAS QUE REGULAN LA RELACIÓN ENTRE PARTICULARES, CONSUMIDORES Y/O USUARIOS Y PATAGONIA DREAMS S.R.L</p>
          <p>CLAÚSULAS QUE REGULAN LA RELACIÓN ENTRE PARTICULARES, CONSUMIDORES Y/O USUARIOS Y PATAGONIA DREAMS S.R.L</p>
          <p>CLAÚSULAS QUE REGULAN LA RELACIÓN ENTRE PARTICULARES, CONSUMIDORES Y/O USUARIOS Y PATAGONIA DREAMS S.R.L</p>
          <div class="buttons text-center">
            <a  class="btn rechazar" href="#" data-dismiss="modal" aria-label="Close">Rechazar</a>
            <a class="btn aceptar" href="#" data-dismiss="modal" aria-label="Close">Aceptar</a>
          </div>
      </div>
    </div>
  </div>
</div>


<?php include('footer.php'); ?>