<?php $page_name = "actividades" ?>
<?php include('header.php'); ?>


<section class="actividades">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="subtitle">Deja tu plan de viaje <b>en nuestras manos</b></h3>
                <div class="small-subtitle">Actividades</div>
                
            </div>
        </div>
        <div class="row filters">
            <div class="col-md-12 d-flex justify-content-between">
                <p class="filter">Filtros</p>
                <div class="d-flex">
                    <div class="filter-container">
                        <select class="select-filter multi-destino" name="select" multiple="multiple">
                            <option value="calafate">El Calafate</option> 
                            <option value="ushuaia">Ushuaia</option> 
                            <option value="bariloche">Bariloche</option> 
                            <option value="chalten">El Chaltén</option> 
                            <option value="chile">Puerto Natales, Chile</option> 
                        </select>
                        <a href="#" class="filter-item">El Calafate </a>
                    </div>
                    <div class="filter-container">
                        <select class="select-filter multi-actividad" name="select" multiple="multiple">
                            <option value="calafate">El Calafate</option> 
                            <option value="ushuaia">Ushuaia</option> 
                            <option value="bariloche">Bariloche</option> 
                            <option value="chalten">El Chaltén</option> 
                            <option value="chile">Puerto Natales, Chile</option> 
                        </select>
                        <a href="#" class="filter-item">Montaña</a>
                        <a href="#" class="filter-item">Translados</a>
                        <a href="#" class="filter-item">Aventura </a>
                    </div>
                    <div class="filter-container">
                        <select class="select-filter multi-duracion" name="select" multiple="multiple">
                            <option value="calafate">El Calafate</option> 
                            <option value="ushuaia">Ushuaia</option> 
                            <option value="bariloche">Bariloche</option> 
                            <option value="chalten">El Chaltén</option> 
                            <option value="chile">Puerto Natales, Chile</option> 
                        </select>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <a href="#" class="box activity selected">
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
            <div class="col-xl-3 col-md-6">
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
            <div class="col-xl-3 col-md-6">
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
            <div class="col-xl-3 col-md-6">
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
            <div class="col-xl-3 col-md-6">
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
            <div class="col-xl-3 col-md-6">
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
            <div class="col-xl-3 col-md-6">
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
            <div class="col-xl-3 col-md-6">
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
            <div class="col-xl-3 col-md-6">
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
            <div class="col-xl-3 col-md-6">
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
            <div class="col-xl-3 col-md-6">
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
            <div class="col-xl-3 col-md-6">
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
            <div class="col-xl-3 col-md-6">
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
            <div class="col-xl-3 col-md-6">
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
            <div class="col-xl-3 col-md-6">
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
            <div class="col-xl-3 col-md-6">
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

<?php include('footer.php'); ?>