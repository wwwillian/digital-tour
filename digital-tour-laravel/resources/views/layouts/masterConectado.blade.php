<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- estilo -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" href="img/logorev1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <title>Digital Tour</title>
</head>

<body>
<header>
    <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg  scrolling-navbar navbar-light double-nav navbar-transparente container-fluid">
        <!-- <a href="index.html" class="navbar-brand"> -->
        <a href="index.php"><img src="img/logorev1.png" width="60"></a>
        <span href="index.php" >Digital Tour</span>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <!-- <a class="navbar-brand" href="#">DIGITAL TOUR</a> -->
            <ul class="navop navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item exibindo">
                    <a class="h5 nav-link" href=""> <i class="fas fa-user"></i> Login</a>
                </li>
                <li class="nav-item">
                    <a class="h5 nav-link" href=""><i class="fas fa-globe"></i> Quem Somos</a>
                </li>
                <li class="nav-item">
                    <a class="h5 nav-link" href=""> <i class="fas fa-info"></i>  FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="h5 nav-link" href=""><i class="fas fa-comments"></i> Chat</a>
                </li>
                <li class="nav-item">
                    <a class="h5 nav-link" href=""><i class="fas fa-envelope"></i> Contato</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        </div>
    </div>
</div>
<div class="container margin-top">
    <div class="container mb-5">

        <div class="card-deck">
            <div class="card escondido">
                <div class="card-body">
                    <ul class="custom-scrollbar">
                        <!-- Logo -->
                        <li>
                            <div class="logo-wrapper sn-ad-avatar-wrapper" onloadedmetadata="" <a href="#"><img
                                    src="https://mdbootstrap.com/img/Photos/Avatars/img (32).jpg" width="90"
                                    class="rounded-circle"><span> João Victor</span></a>
                </div>
                </li>
                <!--/. Logo -->
                <!-- Side navigation links -->
                <li>
                    <ul class="collapsible collapsible-accordion">
                        <li><a class="collapsible-header waves-effect arrow-r active"><i
                                    class="sv-slim-icon fas fa-chevron-right"></i> Perfil<i class="fas fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="#" class="waves-effect active">
                                            <span class="sv-slim"> Amigos</span>
                                            <span class="sv-normal"></span></a>
                                    </li>
                                    <li><a href="#" class="waves-effect">
                                            <span class="sv-slim"> Galeria</span>
                                            <span class="sv-normal"></span></a>
                                    </li>
                                    <li><a href="#" class="waves-effect">
                                            <span class="sv-slim"> Videos</span>
                                            <span class="sv-normal"></span></a>
                                    </li>
                                    <li><a href="#" class="waves-effect">
                                            <span class="sv-slim"> Perfil</span>
                                            <span class="sv-normal"></span></a>
                                    </li>
                                    <li><a href="#" class="waves-effect">
                                            <span class="sv-slim"> Posts</span>
                                            <span class="sv-normal"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="collapsible-header waves-effect arrow-r"><i
                                    class="sv-slim-icon far fa-eye"></i> Visualizar<i
                                    class="fas fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="#" class="waves-effect">
                                            <span class="sv-slim"> Praia</span>
                                            <span class="sv-normal"></span></a>
                                    </li>
                                    <li><a href="#" class="waves-effect">
                                            <span class="sv-slim"> Comidas </span>
                                            <span class="sv-normal"></span></a>
                                    </li>
                                    <li><a href="#" class="waves-effect">
                                            <span class="sv-slim"> Baladas </span>
                                            <span class="sv-normal"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="collapsible-header waves-effect arrow-r"><i
                                    class="sv-slim-icon fas fa-hand-point-right"></i> Planeje<i
                                    class="fas fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="#" class="waves-effect">
                                            <span class="sv-slim">  </span>
                                            <span class="sv-normal"> Proxima Viagens</span></a>
                                    </li>
                                    <li><a href="#" class="waves-effect">
                                            <span class="sv-slim"></span>
                                            <span class="sv-normal"> Lugares Marcados</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- <li><a class="collapsible-header waves-effect arrow-r"><i
                                    class="sv-slim-icon far fa-envelope"></i> Contact me<i
                                    class="fas fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="#" class="waves-effect">
                                            <span class="sv-slim"> F </span>
                                            <span class="sv-normal">FAQ</span></a>
                                    </li>
                                    <li><a href="#" class="waves-effect">
                                            <span class="sv-slim"> W </span>
                                            <span class="sv-normal">Write a message</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                        <li><a id="toggle" class="waves-effect exibindo"><i
                                    class="sv-slim-icon fas fa-angle-double-left exibindo"></i>Minimize menu</a>
                        </li>
                    </ul>
                </li>
                <!--/. Side navigation links -->
                </ul>
                </p>
                <p class="card-text"><small class="text-muted">
                        <div class="sidenav-bg rgba-blue-strong"></div>
            </div>
            </small></p>
        </div>
    </div>
    <!--/. Sidebar navigation -->
@yield('content')


<!-- Footer -->
    <footer class="bg-dark mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto text-center mt-4">
                    <ul class="list-inline text-center">

                        <li class="list-inline-item">
                            <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                            </span>
                            </a>
                        </li>
                    </ul>
                    <span class="copyright text-muted"><strong>&copy;Digital tour</strong> - Digital House 2019.</span>
                </div>
            </div>
        </div>
    </footer>
    <!--fim conteiner-->

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

