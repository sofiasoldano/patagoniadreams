<?php $page_name = "carrito" ?>
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

<section class="carrito">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="subtitle">Carrito(1)</h3>
                    <a href="#" class="vaciar">Vaciar carrito <img src="img/shop.png" width="25"></a>
                </div>
                <div class="detail">
                    <h3 class="subtitle">Detalle de la compra</h3>
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
                            <div class="price d-flex justify-content-between align-items-center">
                                <p>Precio total</p>
                                <div class="number"><span>$</span>1000</div>
                            </div>
                        </div>
                    </div>
                    <div class="buttons d-flex justify-content-between">
                        <div>
                            <a class="btn" href="#">Ver detalle</a>
                            <a class="btn" href="#">Editar</a>
                            <a class="btn" href="#" data-toggle="modal" data-target="#eliminar">Quitar</a>
                        </div>
                        <div>
                            <a class="btn buy" href="page-thank-you.php">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="actividades">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="subtitle"><b>Más actividades recomendadas con El Calafate</b></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <a href="#" class="box activity">
                    <div class="image"><img src="img/glaciar-perito-moreno.jpg" class="img-responsive"></div>
                    <div class="content">
                        <div class="name">Glaciar Perito Moreno</div>
                        <p class="desc"> Traslado al Glaciar Perito Moreno sin guía.</p>
                        <div class="item duracion half">
                            <p>Duracion <br><span>8hs</span></p>
                        </div>
                        <div class="item salidas">
                            <p>Salidas <br><span>Todos los días</span></p>
                        </div>
                        <div class="price d-flex justify-content-between align-items-center">
                            <p>Por adulto</p>
                            <div class="number"><span>$</span>1000</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="#" class="box activity">
                    <div class="image"><img src="img/chalten-full-day.jpg" class="img-responsive"></div>
                    <div class="content">
                        <div class="name">Chalten Full Day</div>
                        <p class="desc">Conoce la capital del Trekking y disfruta sus senderos</p>
                        <div class="item duracion half">
                            <p>Duracion <br><span>10hs</span></p>
                        </div>
                        <div class="item salidas">
                            <p>Salidas <br><span>Mar / Jue / Sab</span></p>
                        </div>
                        <div class="price d-flex justify-content-between align-items-center">
                            <p>Por adulto</p>
                            <div class="number"><span>$</span>2500</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="#" class="box activity">
                    <div class="image"><img src="img/glaciares-gourmet.png" class="img-responsive"></div>
                    <div class="content">
                        <div class="name">Glaciares Gourmet</div>
                        <p class="desc">La mejor opción para conocer el Glaciar Perito Moreno.</p>
                        <div class="item duracion half">
                            <p>Duracion <br><span>10hs</span></p>
                        </div>
                        <div class="item salidas">
                            <p>Salidas <br><span>Todos los días</span></p>
                        </div>
                        <div class="price d-flex justify-content-between align-items-center">
                            <p>Por adulto</p>
                            <div class="number"><span>$</span>4500</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="#" class="box activity">
                    <div class="image"><img src="img/minitrekking.png" class="img-responsive"></div>
                    <div class="content">
                        <div class="name">Minitrekking</div>
                        <p class="desc">Viví el glaciar desde adentro</p>
                        <div class="item duracion half">
                            <p>Duracion <br><span>10hs</span></p>
                        </div>
                        <div class="item salidas">
                            <p>Salidas <br><span class="large">Mar / Mier / Vier / Dom</span></p>
                        </div>
                        <div class="price d-flex justify-content-between align-items-center">
                            <p>Por adulto</p>
                            <div class="number"><span>$</span>3000</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="eliminar" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="subtitle">Eliminar Excursión Glaciar Perito Moreno</h3>
        <p>¿Estás seguro que querés eliminar esta actividad?</p>
          <div class="buttons text-center">
            <a class="btn remove" href="#">Quitar</a>
            <a class="btn" href="#" data-dismiss="modal" aria-label="Close">Cancelar</a>
          </div>
      </div>
    </div>
  </div>
</div>



<?php include('footer.php'); ?>