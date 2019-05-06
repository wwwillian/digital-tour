<?php
include "inc/head.php";
include "inc/headerdif.php";
?>

<!--Inicio conteiner-->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <!--Inicio Carousel-->
            <div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#video-carousel-example2" data-slide-to="0" class="active"></li>
                    <li data-target="#video-carousel-example2" data-slide-to="1"></li>
                    <li data-target="#video-carousel-example2" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <!-- Primeiro Vídeo-->
                    <div class="carousel-item active ">
                        <div class="view cvideos1">
                            <!--Video-->
                            <video class="video-fluid cvideos" width="100%" autoplay loop muted>
                                <source src="https://mdbootstrap.com/img/video/Tropical.mp4" type="video/mp4" />
                            </video>
                            <div class="mask rgba-indigo-light"></div>
                        </div>
                        <!--Texto-->
                        <div class="carousel-caption">
                            <div class="animated fadeInDown">
                                <h3 class="h3-responsive"><strong>Viage!</strong></h3>
                                <p>Compartinhe experiências.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Fim Primeiro Vídeo-->

                    <!-- Segundo Vídeo -->
                    <div class="carousel-item">
                        <div class="view">
                            <!--Video-->
                            <video class="video-fluid cvideos" width="100%" autoplay loop muted>
                                <source src="https://mdbootstrap.com/img/video/forest.mp4" type="video/mp4" />
                            </video>
                            <div class="mask rgba-purple-slight"></div>
                        </div>
                        <!--Texto-->
                        <div class="carousel-caption">
                            <div class="animated fadeInDown">
                                <h3 class="h3-responsive">Conecte-se!</h3>
                                <p>Conheça pessoa pelo mundo.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Fim Segundo Vídeo -->

                    <!-- Terceiro Vídeo -->
                    <div class="carousel-item">
                        <div class="view">
                            <!--Video-->
                            <video class="video-fluid cvideos" width="100%" autoplay loop muted>
                                <source src="https://mdbootstrap.com/img/video/Agua-natural.mp4" type="video/mp4" />
                            </video>
                            <div class="mask rgba-black-strong"></div>
                        </div>

                        <!--Texto-->
                        <div class="carousel-caption">
                            <div class="animated fadeInDown">
                                <h3 class="h3-responsive">Conheça!</h3>
                                <p>Novos lugares.<p>
                            </div>
                        </div>
                    </div>
                    <!-- Fim Terceiro -->
                </div>
                <!-- Fim Carrosel -->
                <!--Controles-->
                <a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controles-->
            </div>
        </div>
    </div>
</div>
<!--Fim do conteiner-->

<!-- Imagens Novo conteiner-->
<div id="efeito" class=" container">
    <div class="imgcar row mt-3 mb-4 mr-3 ml-1">
        <div class="col-lg-2 col-md- mb-12">
            <div class="view overlay z-depth-1-half">
                <img id="transition" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" class="img-fluid"
                    alt="">
                <a href="">
                    <div class="mask rgba-white-light"></div>
                </a>
            </div>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-2 col-md-12 mb-12">

            <!--Image-->
            <div id="efeito" class="view overlay z-depth-1-half">
                <img id="transition" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(78).jpg" class="img-fluid"
                    alt="">
                <a href="">
                    <div class="mask rgba-white-light"></div>
                </a>
            </div>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-2 col-md-6 mb-4">

            <!--Image-->
            <div id="efeito" class="view overlay z-depth-1-half">
                <img id="transition" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(79).jpg" class="img-fluid"
                    alt="">
                <a href="">
                    <div class="mask rgba-white-light"></div>
                </a>
            </div>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-2 col-md-12 mb-4">

            <!--Image-->
            <div id="efeito" class="view overlay z-depth-1-half">
                <img id="transition" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(81).jpg" class="img-fluid"
                    alt="">
                <a href="">
                    <div class="mask rgba-white-light"></div>
                </a>
            </div>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-2 col-md-6 mb-4">

            <!--Image-->
            <div id="efeito" class="view overlay z-depth-1-half">
                <img id="transition" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(82).jpg" class="img-fluid"
                    alt="">
                <a href="">
                    <div class="mask rgba-white-light"></div>
                </a>
            </div>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="imgcar col-lg-2 col-md-6 mb-4">

            <!--Image-->
            <div id="efeito" class="view overlay z-depth-1-half">
                <img id="transition" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(84).jpg" class="img-fluid"
                    alt="">
                <a href="">
                    <div class="mask rgba-white-light"></div>
                </a>
            </div>

        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->

    <?php
    include 'inc/headerini.php';
    ?>

    <div class="row">

        <div class="list-group-flush">
            <hr>
            <div class="list-group-item">

                <p class="mb-0"><span class="glyphicon glyphicon-star-empt" aria-hedden="true"></span><img class="fotoperf"
                        src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" alt="img perfil"
                        width="120"> </i> <span class="glyphicon glyphicon-star-empt" aria-hedden="true">Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.</p></span>
            </div>
            <hr>
            <div class="list-group-item">
                <p class="mb-0"><img class="fotoperf" src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg"
                        alt="img perfil" width="120"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <hr>
            <div class="list-group-item">
                <p class=" mb-0"><img class="fotoperf" src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg"
                        alt="img perfil" width="120"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <hr>
        </div>

        <!-- Card Wider -->
        <div class="card card-cascade wider">



            <!-- Card Narrower -->
            <div class="row">
                <div class="col-sm-4">
                    <div class="card card-cascade narrower">

                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                            <img class="card-img-top"
                                src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg"
                                alt="Card image cap">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade">

                            <!-- Label -->
                            <!-- <h5 class="pink-text pb-2 pt-1"><i class="fas fa-utensils"></i> Gastronomia</h5> -->
                            <!-- Title -->
                            <h4 class="font-weight-bold card-title">Experimente diferentes pratos pelo mundo.</h4>
                            <!-- Text -->
                            <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                                suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>
                            
                        </div>

                    </div>
                </div>
                <!-- Card Narrower -->

                <!-- Card Regular -->
                <div class="col-sm-4">
                    <div class="card card-cascade">

                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/men.jpg"
                                alt="Card image cap">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">

                            <!-- Title -->
                            <h4 class="card-title"><strong>Billy Coleman</strong></h4>
                            <!-- Text -->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus,
                                ex, recusandae. Facere modi sunt, quod quibusdam.
                            </p>
                            
                        </div>

                    </div>
                </div>

                <!-- Card Regular -->

                <!-- Card Wider -->
                <div class="col-sm-4">
                    <div class="card card-cascade wider">

                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo6.jpg"
                                alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">

                            <!-- Title -->
                            <h4 class="card-title"><strong>Arte</strong></h4>
                            <!-- Text -->
                            <p class="card-text">Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium
                                doloremque laudantium, totam rem aperiam. </p>
                           
                        </div>

                    </div>
                </div>
            </div>

            <hr>
            <!-- Card Wider -->
            <div class="card card-cascade wider">



                <!-- Card Narrower -->
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card card-cascade narrower">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top"
                                    src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg"
                                    alt="Card image cap">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade">
                                <!-- Title -->
                                <h4 class="font-weight-bold card-title">Cheat day inspirations</h4>
                                <!-- Text -->
                                <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam
                                    corporis suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>
                                
                            </div>

                        </div>
                    </div>
                    <!-- Card Narrower -->

                    <!-- Card Regular -->
                    <div class="col-sm-4">
                        <div class="card card-cascade">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/men.jpg"
                                    alt="Card image cap">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade text-center">

                                <!-- Title -->
                                <h4 class="card-title"><strong>Billy Coleman</strong></h4>
                                <!-- Text -->
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Voluptatibus, ex, recusandae. Facere modi sunt, quod quibusdam.
                                </p>
                            </div>

                        </div>
                    </div>

                    <!-- Card Regular -->

                    <!-- Card Wider -->
                    <div class="col-sm-4">
                        <div class="card card-cascade wider">

                            <!-- Card image -->
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/photo6.jpg"
                                    alt="Card image cap">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade text-center">

                                <!-- Title -->
                                <h4 class="card-title"><strong>Alison Belmont</strong></h4>
                                <!-- Text -->
                                <p class="card-text">Sed ut perspiciatis unde omnis iste natus sit voluptatem
                                    accusantium doloremque laudantium, totam rem aperiam. </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>

<?php
include "inc/footer.php";
?>
