<div class="row">
                <div class="container">
                <!--Divisor-->
                    <div class="teal accent-2" style="height: 100px;">
                    </div>
                    <!--Material box para imágenes de los productos-->
                    <div class="col s12 m6 l6 ">
                    <div class="white" style="height: 100px;">
                      
                    </div>
                        <div class="row valign wrapper">
                            <div class="col s12 m8 l8">
                            <?php
        print("
                                <img class='col m12 s12 l12 materialboxed border' height='279' src='../../web/img/productos/'".$Producto->getFoto1()." width='300''>
                                </img>
                            </div>
                            <div class='col s12m4 l4'>
                                <img class='col s4 m12 l12 materialboxed border' src='../../web/img/productos/' ".$Producto->getFoto1()." width='100'>
                                    <img class='col s4 m12 l12 materialboxed border' src='../../web/img/productos/' ".$Producto->getFoto1()." width='100'>
                                        <img class='col s4 m12 l12 materialboxed border' src='../../web/img/productos/' ".$Producto->getFoto1()." width='100'>
                                        </img>
                                    </img>
                                </img>
                            </div>
                        </div>
                        <!--íconos de valoración-->
                        <div class='col s6 offset-s2 star'>
                            <i class='small material-icons orange-text'>
                                star
                            </i>
                            <i class='small material-icons orange-text'>
                                star
                            </i>
                            <i class='small material-icons orange-text'>
                                star
                            </i>
                            <i class='small material-icons orange-text'>
                                star_half
                            </i>
                            <i class='small material-icons orange-text'>
                                star_border
                            </i>
                            <h5 class='col s12 center-align valor'>
                                Valoración
                            </h5>
                        </div>
                    </div>
                    <!--Formulario de información del producto-->
                    <div class=' white col s12 m6 l6'>
                        <h4 class='center-align'>
                        ".$Producto->getNombre()."
                        </h4>
                        <div class='cantidad col s6'>
                            <h5>
                                Cantidad:
                            </h5>
                        </div>
                        <div class='col s6'>
                            <form>
                                <div class='row'>
                                    <!--Input numérico-->
                                    <div class='input-field col s8'>
                                        <input class='validate' id='icon_prefix' type='number'>
                                        </input>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class='col s6'>
                            <h3 class='red-text'>
                            <p><b>Precio (US$) ".$Producto->getPrecio()."</b></p>
                            </h3>
                        </div>
                        <div class='col s6'>
                            <a class='waves-effect waves-light btn tooltipped pink darken-4' data-delay='50' data-position='top' data-tooltip='Añadir al carrito' href='Carrito.php'>
                                <i class='material-icons right '>
                                    add_shopping_cart
                                </i>
                                Añadir
                            </a>
                        </div>
                        <div class='col s12'>
                            <h5>
                                Descripción:
                            </h5>
                        </div>
                        <div class='col s12'>
                        <p>".$Producto->getDescripcion()."</p>
                        </div>
                    </div>
                    <div class='col s12' style=' height:100px;'>
                    </div>
                    <!--Text area de comentario-->
                    <div class='row white'>
                      <form class='col s12'>
                        <div class='row'>
                          <div class='input-field col s10 offset-s1'>
                            <textarea id='textarea1' class='materialize-textarea'></textarea>
                            <label for='textarea1'>Deja un comentario</label>
                          </div>
                        </div>
                      </form>
                    </div>
                    ");
        ?>
                </div>
            </div>