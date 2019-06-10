@extends('layouts.conectado')

@section('content')

<!-- Foto Perfil - Personalizado -->
<div class="container">
<div class="content">
    <div class="col-lg-12 col-md-12 col-xl-12">

        <div class="awesome user width-cover">
            <div class="container img-fundo" id="btnMostrarEsconder" style="background-image: url('img/006.jpg');">
                <div class="items-banner"></div>
                <div class="img-perfil">
                    <a href="#"><img src="https://mdbootstrap.com/img/Photos/Avatars/img (32).jpg" id= "btnMostrarEsconder1"divConteudo alt="img perfil"
                                     width="120"></a>
                    <a href="#" class="btn btn-primary btn-small btn-alt-foto divConteudo1" data-toggle="modal">Alterar Foto</a>
                </div>
                <h1 class="perfil ">João Victor</h1>
                <a class="btn btn-primary btn-embossed btn-capa divConteudo" data-toggle="modal" href="#">Alterar Capa</a>

            </div>
        </div>
    </div>
    <!-- Cabecalho de postagem! -->
    <div>
        <div class="col-lg-12">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="tab-header card">
                <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tposts" role="tab">Posts</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tamigos" role="tab">Amigos</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tfotos" role="tab">Galeria</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tvideos" role="tab">Videos</a>
                        <div class="slide"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tperfil" role="tab">Perfil</a>
                        <div class="slide"></div>
                    </li>
                </ul>
            </div>


            <div class="tab-content">
                <!--Perfil -->
                <div class="tab-pane" id="tperfil" role="tabpanel">

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">Perfil</h5>
                            <button id="edit-btn" type="button"
                                    class="btn btn-sm btn-primary waves-effect waves-light f-right">Editar</button>
                        </div>
                        <div class="card-block">
                            <div class="view-info">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="general-info">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-xs-6">
                                                    <div class="table-responsive">
                                                        <table class="table m-0">
                                                            <tbody>
                                                            <tr>
                                                                <th scope="row">Nome Completo</th>
                                                                <td>Sheldon Cupper</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Genero</th>
                                                                <td>Masculino</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Aniversario</th>
                                                                <td> 250 de julho de 1984</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Status Civil</th>
                                                                <td>Solteiro</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Localizacao</th>
                                                                <td>Sao Paulo, BR</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-xl-6">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <tbody>
                                                            <tr>
                                                                <th scope="row">E-Mail</th>
                                                                <td><a href="#">email@exemplo.com</a></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Celular</th>
                                                                <td>(011) - 95555-8985</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Twitter</th>
                                                                <td>@twitter</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Skype</th>
                                                                <td>sheldon.skype</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Facebook</th>
                                                                <td><a href="#">www.facebook.com/sheldon</a></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- editar perfil -->
                            <div class="edit-info" style="display: none;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="general-info form-material">
                                            <div class="row">
                                                <div class="col-lg-6 ">
                                                    <div class="material-group">
                                                        <div class="material-addone">
                                                            <i class="icofont icofont-user"></i>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <input type="text" name="footer-email" class="form-control"
                                                                   required="">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Full Name</label>
                                                        </div>
                                                    </div>
                                                    <div class="material-group">
                                                        <div class="material-addone">
                                                            <i class="fa fa-mars-double"></i>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <div class="form-radio">
                                                                <div class="group-add-on">
                                                                    <div class="radio radiofill radio-inline">
                                                                        <label>
                                                                            <input type="radio" name="radio" checked=""><i
                                                                                class="helper"></i> Male
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio radiofill radio-inline">
                                                                        <label>
                                                                            <input type="radio" name="radio"><i
                                                                                class="helper"></i> Female
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="material-group">
                                                        <div class="material-addone">
                                                            <i class="fa fa-birthday-cake"></i>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <input type="text" name="footer-email" class="form-control"
                                                                   required="">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Select Your Birth Date</label>
                                                        </div>
                                                    </div>
                                                    <div class="material-group">
                                                        <div class="material-addone">
                                                            <i class="fa fa-heart"></i>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <select id="hello-single" class="form-control">
                                                                <option value="">---- Marital Status ----</option>
                                                                <option value="married">Married</option>
                                                                <option value="unmarried">Unmarried</option>
                                                            </select>
                                                            <span class="form-bar"></span>
                                                        </div>
                                                    </div>
                                                    <div class="material-group">
                                                        <div class="material-addone">
                                                            <i class="icofont icofont-location-pin"></i>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <input type="text" name="footer-email" class="form-control"
                                                                   required="">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Address</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="material-group">
                                                        <div class="material-addone">
                                                            <i class="icofont icofont-mobile-phone"></i>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <input type="text" name="footer-email" class="form-control"
                                                                   required="">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Mobile Number</label>
                                                        </div>
                                                    </div>
                                                    <div class="material-group">
                                                        <div class="material-addone">
                                                            <i class="icofont icofont-social-twitter"></i>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <input type="text" name="footer-email" class="form-control"
                                                                   required="">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Twitter Id</label>
                                                        </div>
                                                    </div>
                                                    <div class="material-group">
                                                        <div class="material-addone">
                                                            <i class="icofont icofont-social-skype"></i>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <input type="text" name="footer-email" class="form-control"
                                                                   required="">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Skype Id</label>
                                                        </div>
                                                    </div>
                                                    <div class="material-group">
                                                        <div class="material-addone">
                                                            <i class="icofont icofont-earth"></i>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <input type="text" name="footer-email" class="form-control"
                                                                   required="">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">website</label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="text-center">
                                                <a href="#"
                                                   class="btn btn-primary waves-effect waves-light m-r-20">Salvar</a>
                                                <a href="#" id="edit-cancel"
                                                   class="btn btn-default waves-effect">Cancelar</a>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text">Escreva sobre sua melhores experiencias</h5>
                                    <button id="edit-info-btn" type="button"
                                            class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                        <i class="icofont icofont-edit"></i>
                                    </button>
                                </div>
                                <div class="card-block user-desc">
                                    <div class="view-desc">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots
                                            in a piece of
                                            classical Latin literature from 45 BC, making it over 2000 years old. Richard
                                            McClintock, a
                                            Latin professor at Hampden-Sydney College in Virginia, looked up one of the more
                                            obscure Latin
                                            words, consectetur, from a Lorem Ipsum passage, and going through the cites of
                                            the word in
                                            classical literature, discovered the undoubtable source. Lorem Ipsum comes from
                                            sections 1.10.32
                                            and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil)
                                            by Cicero,
                                            written in 45 BC. This book is a treatise on the theory of ethics, very popular
                                            during the
                                            Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..",
                                            comes from a line in
                                            section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is
                                            reproduced below for
                                            those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et
                                            Malorum" by Cicero
                                            are also reproduced in their exact original form, accompanied by English
                                            versions from the 1914
                                            translation by H. Rackham.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- fim caminho de posts -->



                <!--Fotos-->
                <div class="tab-pane" id="tfotos" role="tabpanel">

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">Galeria</h5>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card b-l-success business-info services m-b-20">
                                        <div class="card-header">
                                            <div class="container">



                                                <div class="container gallery-container">

                                                    <div class="tz-gallery">

                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/park.jpg">
                                                                        <img src="img/park.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/benches.jpg">
                                                                        <img src="img/benches.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/bridge.jpg">
                                                                        <img src="img/bridge.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/coast.jpg">
                                                                        <img src="img/coast.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/rails.jpg">
                                                                        <img src="img/rails.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/rocks.jpg">
                                                                        <img src="img/rocks.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <!-- <div class="service-header">
                                                <a href="#">
                                                    <img src="assets/img/001.jpg" alt="img 1" class="rounded img-thumbnail">
                                                </a>
                                            </div> -->
                                            <span class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                  role="tooltip">
                                        </span>
                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>
                                                    Editar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>
                                                    Deletar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>
                                                    Ampliar</a>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p class="task-detail">Paisagem!</p>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card b-l-danger business-info services">
                                        <div class="card-header">
                                            <div class="container">



                                                <div class="container gallery-container">

                                                    <div class="tz-gallery">

                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/park.jpg">
                                                                        <img src="img/park.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/benches.jpg">
                                                                        <img src="img/benches.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/bridge.jpg">
                                                                        <img src="img/bridge.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/coast.jpg">
                                                                        <img src="img/coast.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/rails.jpg">
                                                                        <img src="img/rails.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/rocks.jpg">
                                                                        <img src="img/rocks.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <!--
                                                                                    <div class="service-header">
                                                                                        <a href="#">
                                                                                            <img src="assets/img/002.jpg" alt="img 2" class="rounded img-thumbnail">
                                                                                        </a>
                                                                                    </div> -->
                                            <span class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                  role="tooltip">
                                        </span>
                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>
                                                    Editar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>
                                                    Deletar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>
                                                    Ampliar</a>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p class="task-detail">Viagem Brasilia</p>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card b-l-info business-info services">
                                        <div class="card-header">
                                            <div class="container">



                                                <div class="container gallery-container">

                                                    <div class="tz-gallery">

                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/park.jpg">
                                                                        <img src="img/park.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/benches.jpg">
                                                                        <img src="img/benches.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/bridge.jpg">
                                                                        <img src="img/bridge.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/coast.jpg">
                                                                        <img src="img/coast.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/rails.jpg">
                                                                        <img src="img/rails.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/rocks.jpg">
                                                                        <img src="img/rocks.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>


                                            <!-- <div class="service-header">
                                                <a href="#">
                                                    <img src="assets/img/003.jpg" alt="img 3" class="rounded img-thumbnail">
                                                </a>
                                            </div> -->
                                            <span class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                  role="tooltip">
                                        </span>
                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>
                                                    Editar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>
                                                    Deletar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>
                                                    Ampliar</a>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p class="task-detail">Viagem França</p>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card b-l-warning business-info services">
                                        <div class="card-header">
                                            <div class="container">



                                                <div class="container gallery-container">

                                                    <div class="tz-gallery">

                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/park.jpg">
                                                                        <img src="img/park.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/benches.jpg">
                                                                        <img src="img/benches.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/bridge.jpg">
                                                                        <img src="img/bridge.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/coast.jpg">
                                                                        <img src="img/coast.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/rails.jpg">
                                                                        <img src="img/rails.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/rocks.jpg">
                                                                        <img src="img/rocks.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <span class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                  role="tooltip">
                                        </span>
                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>
                                                    Editar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>
                                                    Deletar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>
                                                    Ampliar</a>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p class="task-detail">Índia</p>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card b-l-danger business-info services">
                                        <div class="card-header">
                                            <div class="container">



                                                <div class="container gallery-container">

                                                    <div class="tz-gallery">

                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/park.jpg">
                                                                        <img src="img/park.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/benches.jpg">
                                                                        <img src="img/benches.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/bridge.jpg">
                                                                        <img src="img/bridge.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/coast.jpg">
                                                                        <img src="img/coast.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/rails.jpg">
                                                                        <img src="img/rails.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/rocks.jpg">
                                                                        <img src="img/rocks.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <span class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                  role="tooltip">
                                        </span>
                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>
                                                    Editar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>
                                                    Deletar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>
                                                    Ampliar</a>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p class="task-detail">São Paulo</p>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card b-l-success business-info services">
                                        <div class="card-header">
                                            <div class="container">



                                                <div class="container gallery-container">

                                                    <div class="tz-gallery">

                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/park.jpg">
                                                                        <img src="img/park.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/benches.jpg">
                                                                        <img src="img/benches.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/bridge.jpg">
                                                                        <img src="img/bridge.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/coast.jpg">
                                                                        <img src="img/coast.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/rails.jpg">
                                                                        <img src="img/rails.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="card">
                                                                    <a class="lightbox" href="img/rocks.jpg">
                                                                        <img src="img/rocks.jpg" alt="Park" class="card-img-top">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <span class="dropdown-toggle addon-btn text-muted f-right service-btn"
                                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                  role="tooltip">
                                        </span>
                                            <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>
                                                    Editar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>
                                                    Deletar</a>
                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>
                                                    Ampliar</a>
                                            </div>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p class="task-detail">Rio de Janeiro</p>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text">Adicionar mais fotos</h5>
                                </div>
                                <div class="card-block">
                                    <div id="main"
                                         style="height: 300px; width: 100%; -moz-user-select: none; background-color: rgba(0, 0, 0, 0);"
                                         _echarts_instance_="1554821896534">
                                        <div style="position: relative; overflow: hidden; width: 100px; height: 300px;">
                                            <div style="position: absolute; left: 0px; top: 0px; width: 100px; height: 300px; -moz-user-select: none;"
                                                 data-zr-dom-id="bg" class="zr-element"></div><canvas
                                                style="position: absolute; left: 0px; top: 0px; width: 100px; height: 300px; -moz-user-select: none;"
                                                width="100" height="300" data-zr-dom-id="0"
                                                class="zr-element"></canvas><canvas
                                                style="position: absolute; left: 0px; top: 0px; width: 100px; height: 300px; -moz-user-select: none;"
                                                width="100" height="300" data-zr-dom-id="1"
                                                class="zr-element"></canvas><canvas
                                                style="position: absolute; left: 0px; top: 0px; width: 100px; height: 300px; -moz-user-select: none;"
                                                width="100" height="300" data-zr-dom-id="_zrender_hover_"
                                                class="zr-element"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--fim das fotos-->

                <!--Amigos-->
                <div class="tab-pane" id="tamigos" role="tabpanel">
                    <div class="conteiner">

                        <!-- <div class="row"> -->
                        <!-- <div class="tab-pane active show" id="tvideos" role="tabpanel"> -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-header-text">Amigos</h5>
                            </div>
                            <div class="card-block margin-rigth">
                                <ul class="media-list">
                                    <li class="media">
                                        <div class="media-left">
                                            <a href="#">

                                            </a>
                                        </div>


                                        <div class="amigos-css">
                                            <!-- Grid row -->
                                            <div class="row">

                                                <!-- Grid column -->
                                                <div class="col-lg-4 col-md-12 mb-4">
                                                    <div class="card card-personal mb-md-0 mb-4">

                                                        <!-- mdbCard image-->
                                                        <div class="view overlay">
                                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(28).jpg" alt="mdbCard image cap">
                                                            <a href="#!">
                                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                                            </a>
                                                        </div>
                                                        <!-- mdbCard image-->

                                                        <!-- mdbCard content -->
                                                        <div class="card-body">

                                                            <!-- Title-->
                                                            <a>
                                                                <h4 class="card-title">Sara</h4>
                                                            </a>
                                                            <a class="card-meta">Coworker</a>
                                                            <!-- Text -->
                                                            <p class="card-text">Sara is a video maker living in Tokyo.</p>
                                                            <hr>
                                                            <a class="card-meta"><span><i class="fa fa-user"></i>127 Friends</span></a>
                                                            <p class="card-meta float-right">Joined in 2014</p>

                                                        </div>
                                                        <!-- mdbCard content -->

                                                    </div>
                                                </div>
                                                <!-- Grid column -->

                                                <!-- Grid column -->
                                                <div class="col-lg-4 col-md-6 mb-4">
                                                    <div class="card card-personal mb-md-0 mb-4">

                                                        <!-- mdbCard image-->
                                                        <div class="view overlay">
                                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" alt="mdbCard image cap">
                                                            <a href="#!">
                                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                                            </a>
                                                        </div>
                                                        <!-- mdbCard image-->

                                                        <!-- mdbCard content -->
                                                        <div class="card-body">

                                                            <!-- Title-->
                                                            <a>
                                                                <h4 class="card-title">John</h4>
                                                            </a>
                                                            <a class="card-meta">Coworker</a>
                                                            <!-- Text -->
                                                            <p class="card-text">John is a copywriter living in Seattle.</p>
                                                            <hr>
                                                            <a class="card-meta"><span><i class="fa fa-user"></i>48 Friends</span></a>
                                                            <p class="card-meta float-right">Joined in 2015</p>

                                                        </div>
                                                        <!-- mdbCard content -->

                                                    </div>
                                                </div>
                                                <!-- Grid column -->

                                                <!-- Grid column -->
                                                <div class="col-lg-4 col-md-6 mb-4">
                                                    <div class="card card-personal mb-md-0 mb-4">

                                                        <!-- mdbCard image-->
                                                        <div class="view overlay">
                                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg" alt="mdbCard image cap">
                                                            <a href="#!">
                                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                                            </a>
                                                        </div>
                                                        <!-- mdbCard image-->

                                                        <!-- mdbCard content -->
                                                        <div class="card-body">

                                                            <!-- Title-->
                                                            <a>
                                                                <h4 class="card-title">Anna</h4>
                                                            </a>
                                                            <a class="card-meta">Friends</a>
                                                            <!-- Text -->
                                                            <p class="card-text">Anna is a web designer living in US.</p>
                                                            <hr>
                                                            <a class="card-meta"><span><i class="fa fa-user"></i>83 Friends</span></a>
                                                            <p class="card-meta float-right">Joined in 2012</p>

                                                        </div>
                                                        <!-- mdbCard content -->

                                                    </div>
                                                </div>
                                                <!-- Grid column -->

                                            </div>
                                            <!-- Grid row -->
                                            <!-- Grid row -->
                                            <div class="row">

                                                <!-- Grid column -->
                                                <div class="col-lg-4 col-md-12 mb-4">
                                                    <div class="card card-personal mb-md-0 mb-4">

                                                        <!-- mdbCard image-->
                                                        <div class="view overlay">
                                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(28).jpg" alt="mdbCard image cap">
                                                            <a href="#!">
                                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                                            </a>
                                                        </div>
                                                        <!-- mdbCard image-->

                                                        <!-- mdbCard content -->
                                                        <div class="card-body">

                                                            <!-- Title-->
                                                            <a>
                                                                <h4 class="card-title">Sara</h4>
                                                            </a>
                                                            <a class="card-meta">Coworker</a>
                                                            <!-- Text -->
                                                            <p class="card-text">Sara is a video maker living in Tokyo.</p>
                                                            <hr>
                                                            <a class="card-meta"><span><i class="fa fa-user"></i>127 Friends</span></a>
                                                            <p class="card-meta float-right">Joined in 2014</p>

                                                        </div>
                                                        <!-- mdbCard content -->

                                                    </div>
                                                </div>
                                                <!-- Grid column -->

                                                <!-- Grid column -->
                                                <div class="col-lg-4 col-md-6 mb-4">
                                                    <div class="card card-personal mb-md-0 mb-4">

                                                        <!-- mdbCard image-->
                                                        <div class="view overlay">
                                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" alt="mdbCard image cap">
                                                            <a href="#!">
                                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                                            </a>
                                                        </div>
                                                        <!-- mdbCard image-->

                                                        <!-- mdbCard content -->
                                                        <div class="card-body">

                                                            <!-- Title-->
                                                            <a>
                                                                <h4 class="card-title">John</h4>
                                                            </a>
                                                            <a class="card-meta">Coworker</a>
                                                            <!-- Text -->
                                                            <p class="card-text">John is a copywriter living in Seattle.</p>
                                                            <hr>
                                                            <a class="card-meta"><span><i class="fa fa-user"></i>48 Friends</span></a>
                                                            <p class="card-meta float-right">Joined in 2015</p>

                                                        </div>
                                                        <!-- mdbCard content -->

                                                    </div>
                                                </div>
                                                <!-- Grid column -->

                                                <!-- Grid column -->
                                                <div class="col-lg-4 col-md-6 mb-4">
                                                    <div class="card card-personal mb-md-0 mb-4">

                                                        <!-- mdbCard image-->
                                                        <div class="view overlay">
                                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(26).jpg" alt="mdbCard image cap">
                                                            <a href="#!">
                                                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                                                            </a>
                                                        </div>
                                                        <!-- mdbCard image-->

                                                        <!-- mdbCard content -->
                                                        <div class="card-body">

                                                            <!-- Title-->
                                                            <a>
                                                                <h4 class="card-title">Anna</h4>
                                                            </a>
                                                            <a class="card-meta">Friends</a>
                                                            <!-- Text -->
                                                            <p class="card-text">Anna is a web designer living in US.</p>
                                                            <hr>
                                                            <a class="card-meta"><span><i class="fa fa-user"></i>83 Friends</span></a>
                                                            <p class="card-meta float-right">Joined in 2012</p>

                                                        </div>
                                                        <!-- mdbCard content -->

                                                    </div>
                                                </div>
                                                <!-- Grid column -->

                                            </div>
                                            <!-- Grid row -->
                                            <nav class="d-flex justify-content-center mt-5 display-posts">
                                                <ul class="pagination pagination-circle pg-teal mb-0">

                                                    <!--First-->
                                                    <li class="page-item disabled">
                                                        <a class="page-link">First</a>
                                                    </li>

                                                    <!--Arrow left-->
                                                    <li class="page-item disabled">
                                                        <a class="page-link" aria-label="Previous">
                                                            <span aria-hidden="true">«</span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                    </li>

                                                    <!--Numbers-->
                                                    <li class="page-item active">
                                                        <a class="page-link">1</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link">2</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link">4</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link">5</a>
                                                    </li>

                                                    <!--Arrow right-->
                                                    <li class="page-item">
                                                        <a class="page-link" aria-label="Next">
                                                            <span aria-hidden="true">»</span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </li>

                                                    <!--Last-->
                                                    <li class="page-item">
                                                        <a class="page-link">Last</a>
                                                    </li>

                                                </ul>
                                            </nav>
                                        </div>

                                    </li></ul></div>
                            <!-- </div> -->
                        </div>


                        <!-- </div> -->

                    </div>

                </div>
                <!--fim Amigos-->

                <!-- videos -->
                <div class="tab-pane" id="tvideos" role="tabpanel">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text">Videos</h5>
                        </div>
                        <div class="card-block">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="media-left">
                                        <a href="#">

                                        </a>
                                    </div>


                                    <div class="videos-css">
                                        <!-- Grid row -->
                                        <div class="row">

                                            <!-- Grid column -->
                                            <div class="col-lg-4 col-md-12 mb-4">

                                                <!--Modal: Name-->
                                                <div class="modal fade" id="modal1" tabindex="-1" role="dialog"
                                                     aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">

                                                        <!--Content-->
                                                        <div class="modal-content">

                                                            <!--Body-->
                                                            <div class="modal-body mb-0 p-0">

                                                                <div
                                                                    class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                                    <iframe class="embed-responsive-item"
                                                                            src="https://www.youtube.com/embed/A3PDXmYoF5U"
                                                                            allowfullscreen></iframe>
                                                                </div>

                                                            </div>

                                                            <!--Footer-->
                                                            <div class="modal-footer justify-content-center">
                                                                <span class="mr-4">Spread the word!</span>
                                                                <a type="button" class="btn-floating btn-sm btn-fb"><i
                                                                        class="fab fa-facebook-f"></i></a>
                                                                <!--Twitter-->
                                                                <a type="button" class="btn-floating btn-sm btn-tw"><i
                                                                        class="fab fa-twitter"></i></a>
                                                                <!--Google +-->
                                                                <a type="button" class="btn-floating btn-sm btn-gplus"><i
                                                                        class="fab fa-google-plus-g"></i></a>
                                                                <!--Linkedin-->
                                                                <a type="button" class="btn-floating btn-sm btn-ins"><i
                                                                        class="fab fa-linkedin-in"></i></a>

                                                                <button type="button"
                                                                        class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                                                        data-dismiss="modal">Close</button>

                                                            </div>

                                                        </div>
                                                        <!--/.Content-->

                                                    </div>
                                                </div>
                                                <!--Modal: Name-->

                                                <a><img class="img-fluid z-depth-1"
                                                        src="https://mdbootstrap.com/img/screens/yt/screen-video-1.jpg"
                                                        alt="video" data-toggle="modal" data-target="#modal1"></a>

                                            </div>
                                            <!-- Grid column -->

                                            <!-- Grid column -->
                                            <div class="col-lg-4 col-md-6 mb-4">

                                                <!--Modal: Name-->
                                                <div class="modal fade" id="modal6" tabindex="-1" role="dialog"
                                                     aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">

                                                        <!--Content-->
                                                        <div class="modal-content">

                                                            <!--Body-->
                                                            <div class="modal-body mb-0 p-0">

                                                                <div
                                                                    class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                                    <iframe class="embed-responsive-item"
                                                                            src="https://www.youtube.com/embed/wTcNtgA6gHs"
                                                                            allowfullscreen></iframe>
                                                                </div>

                                                            </div>

                                                            <!--Footer-->
                                                            <div class="modal-footer justify-content-center">
                                                                <span class="mr-4">Spread the word!</span>
                                                                <a type="button" class="btn-floating btn-sm btn-fb"><i
                                                                        class="fab fa-facebook-f"></i></a>
                                                                <!--Twitter-->
                                                                <a type="button" class="btn-floating btn-sm btn-tw"><i
                                                                        class="fab fa-twitter"></i></a>
                                                                <!--Google +-->
                                                                <a type="button" class="btn-floating btn-sm btn-gplus"><i
                                                                        class="fab fa-google-plus-g"></i></a>
                                                                <!--Linkedin-->
                                                                <a type="button" class="btn-floating btn-sm btn-ins"><i
                                                                        class="fab fa-linkedin-in"></i></a>

                                                                <button type="button"
                                                                        class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                                                        data-dismiss="modal">Close</button>

                                                            </div>

                                                        </div>
                                                        <!--/.Content-->

                                                    </div>
                                                </div>
                                                <!--Modal: Name-->

                                                <a><img class="img-fluid z-depth-1"
                                                        src="https://mdbootstrap.com/img/screens/yt/screen-video-2.jpg"
                                                        alt="video" data-toggle="modal" data-target="#modal6"></a>

                                            </div>
                                            <!-- Grid column -->

                                            <!-- Grid column -->
                                            <div class="col-lg-4 col-md-6 mb-4">

                                                <!--Modal: Name-->
                                                <div class="modal fade" id="modal4" tabindex="-1" role="dialog"
                                                     aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">

                                                        <!--Content-->
                                                        <div class="modal-content">

                                                            <!--Body-->
                                                            <div class="modal-body mb-0 p-0">

                                                                <div
                                                                    class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                                    <iframe class="embed-responsive-item"
                                                                            src="https://www.youtube.com/embed/vlDzYIIOYmM"
                                                                            allowfullscreen></iframe>
                                                                </div>

                                                            </div>

                                                            <!--Footer-->
                                                            <div class="modal-footer justify-content-center">
                                                                <span class="mr-4">Spread the word!</span>
                                                                <a type="button" class="btn-floating btn-sm btn-fb"><i
                                                                        class="fab fa-facebook-f"></i></a>
                                                                <!--Twitter-->
                                                                <a type="button" class="btn-floating btn-sm btn-tw"><i
                                                                        class="fab fa-twitter"></i></a>
                                                                <!--Google +-->
                                                                <a type="button" class="btn-floating btn-sm btn-gplus"><i
                                                                        class="fab fa-google-plus-g"></i></a>
                                                                <!--Linkedin-->
                                                                <a type="button" class="btn-floating btn-sm btn-ins"><i
                                                                        class="fab fa-linkedin-in"></i></a>

                                                                <button type="button"
                                                                        class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                                                        data-dismiss="modal">Close</button>

                                                            </div>

                                                        </div>
                                                        <!--/.Content-->

                                                    </div>
                                                </div>
                                                <!--Modal: Name-->

                                                <a><img class="img-fluid z-depth-1"
                                                        src="https://mdbootstrap.com/img/screens/yt/screen-video-3.jpg"
                                                        alt="video" data-toggle="modal" data-target="#modal4"></a>

                                            </div>
                                            <!-- Grid column -->

                                        </div>
                                        <!-- Grid row -->
                                        <!-- Grid row -->
                                        <div class="row">

                                            <!-- Grid column -->
                                            <div class="col-lg-4 col-md-12 mb-4">

                                                <!--Modal: Name-->
                                                <div class="modal fade" id="modal1" tabindex="-1" role="dialog"
                                                     aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">

                                                        <!--Content-->
                                                        <div class="modal-content">

                                                            <!--Body-->
                                                            <div class="modal-body mb-0 p-0">

                                                                <div
                                                                    class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                                    <iframe class="embed-responsive-item"
                                                                            src="https://www.youtube.com/embed/A3PDXmYoF5U"
                                                                            allowfullscreen></iframe>
                                                                </div>

                                                            </div>

                                                            <!--Footer-->
                                                            <div class="modal-footer justify-content-center">
                                                                <span class="mr-4">Spread the word!</span>
                                                                <a type="button" class="btn-floating btn-sm btn-fb"><i
                                                                        class="fab fa-facebook-f"></i></a>
                                                                <!--Twitter-->
                                                                <a type="button" class="btn-floating btn-sm btn-tw"><i
                                                                        class="fab fa-twitter"></i></a>
                                                                <!--Google +-->
                                                                <a type="button" class="btn-floating btn-sm btn-gplus"><i
                                                                        class="fab fa-google-plus-g"></i></a>
                                                                <!--Linkedin-->
                                                                <a type="button" class="btn-floating btn-sm btn-ins"><i
                                                                        class="fab fa-linkedin-in"></i></a>

                                                                <button type="button"
                                                                        class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                                                        data-dismiss="modal">Close</button>

                                                            </div>

                                                        </div>
                                                        <!--/.Content-->

                                                    </div>
                                                </div>
                                                <!--Modal: Name-->

                                                <a><img class="img-fluid z-depth-1"
                                                        src="https://mdbootstrap.com/img/screens/yt/screen-video-1.jpg"
                                                        alt="video" data-toggle="modal" data-target="#modal1"></a>

                                            </div>
                                            <!-- Grid column -->

                                            <!-- Grid column -->
                                            <div class="col-lg-4 col-md-6 mb-4">

                                                <!--Modal: Name-->
                                                <div class="modal fade" id="modal6" tabindex="-1" role="dialog"
                                                     aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">

                                                        <!--Content-->
                                                        <div class="modal-content">

                                                            <!--Body-->
                                                            <div class="modal-body mb-0 p-0">

                                                                <div
                                                                    class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                                    <iframe class="embed-responsive-item"
                                                                            src="https://www.youtube.com/embed/wTcNtgA6gHs"
                                                                            allowfullscreen></iframe>
                                                                </div>

                                                            </div>

                                                            <!--Footer-->
                                                            <div class="modal-footer justify-content-center">
                                                                <span class="mr-4">Spread the word!</span>
                                                                <a type="button" class="btn-floating btn-sm btn-fb"><i
                                                                        class="fab fa-facebook-f"></i></a>
                                                                <!--Twitter-->
                                                                <a type="button" class="btn-floating btn-sm btn-tw"><i
                                                                        class="fab fa-twitter"></i></a>
                                                                <!--Google +-->
                                                                <a type="button" class="btn-floating btn-sm btn-gplus"><i
                                                                        class="fab fa-google-plus-g"></i></a>
                                                                <!--Linkedin-->
                                                                <a type="button" class="btn-floating btn-sm btn-ins"><i
                                                                        class="fab fa-linkedin-in"></i></a>

                                                                <button type="button"
                                                                        class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                                                        data-dismiss="modal">Close</button>

                                                            </div>

                                                        </div>
                                                        <!--/.Content-->

                                                    </div>
                                                </div>
                                                <!--Modal: Name-->

                                                <a><img class="img-fluid z-depth-1"
                                                        src="https://mdbootstrap.com/img/screens/yt/screen-video-2.jpg"
                                                        alt="video" data-toggle="modal" data-target="#modal6"></a>

                                            </div>
                                            <!-- Grid column -->

                                            <!-- Grid column -->
                                            <div class="col-lg-4 col-md-6 mb-4">

                                                <!--Modal: Name-->
                                                <div class="modal fade" id="modal4" tabindex="-1" role="dialog"
                                                     aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">

                                                        <!--Content-->
                                                        <div class="modal-content">

                                                            <!--Body-->
                                                            <div class="modal-body mb-0 p-0">

                                                                <div
                                                                    class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                                    <iframe class="embed-responsive-item"
                                                                            src="https://www.youtube.com/embed/vlDzYIIOYmM"
                                                                            allowfullscreen></iframe>
                                                                </div>

                                                            </div>

                                                            <!--Footer-->
                                                            <div class="modal-footer justify-content-center">
                                                                <span class="mr-4">Spread the word!</span>
                                                                <a type="button" class="btn-floating btn-sm btn-fb"><i
                                                                        class="fab fa-facebook-f"></i></a>
                                                                <!--Twitter-->
                                                                <a type="button" class="btn-floating btn-sm btn-tw"><i
                                                                        class="fab fa-twitter"></i></a>
                                                                <!--Google +-->
                                                                <a type="button" class="btn-floating btn-sm btn-gplus"><i
                                                                        class="fab fa-google-plus-g"></i></a>
                                                                <!--Linkedin-->
                                                                <a type="button" class="btn-floating btn-sm btn-ins"><i
                                                                        class="fab fa-linkedin-in"></i></a>

                                                                <button type="button"
                                                                        class="btn btn-outline-primary btn-rounded btn-md ml-4"
                                                                        data-dismiss="modal">Close</button>

                                                            </div>

                                                        </div>
                                                        <!--/.Content-->

                                                    </div>
                                                </div>
                                                <!--Modal: Name-->

                                                <a><img class="img-fluid z-depth-1"
                                                        src="https://mdbootstrap.com/img/screens/yt/screen-video-3.jpg"
                                                        alt="video" data-toggle="modal" data-target="#modal4"></a>

                                            </div>
                                            <!-- Grid column -->

                                        </div>
                                        <!-- Grid row -->
                                    </div>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- fim  videos -->

                <!-- Posts -->

                <div class="tab-pane active" id="tposts" role="tabpanel">

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-header-text mt-2">Publique seu Posts</h5>
                            <form class="form-group" action="index.html" method="post">
                                <textarea name="posts" class="resize"></textarea>
                                <button id="edit-btn" type="button"
                                        class="btn btn-sm btn-primary waves-effect waves-light f-right">Enviar</button>
                            </form>
                        </div>
                        <div class="card-block">
                            <div class="view-info">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="general-info">
                                            <div class="row">
                                                <div class="col-lg-12 col-xl-6">
                                                    Posts Publicados
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim de Posts -->
            </div>
            <!-- Fim de Posts -->
        </div>
        <!-- fim da col-lg-12 -->
    </div>
    <!-- fim da row -->



    <!--Postagens-->
    <section class="my-5 postagem-display">

        <div class="card-header border-0 font-weight-bold">Útimos Posts</div>

        <div class="d-md-flex flex-md-fill mt-4 px-1">
            <div class="d-flex justify-content-center mr-md-5">
                <img class="card-img-100 z-depth-1 mb-4" width="120" height="120"
                     src="https://mdbootstrap.com/img/Photos/Avatars/img (32).jpg" alt="avatar">
            </div>
            <textarea class="form-control pl-3 pt-3" id="exampleFormControlTextarea1" rows="6"
                      placeholder="Write something here..."></textarea>
        </div>
        <div class="text-center mt-4">
            <button class="btn btn-primary btn-md">Submit</button>
        </div>

    </section>
    <!-- Reply section (logged in user) -->
    <!--Section: Comments-->
    <section class="my-5 postagem-display">

        <!-- Card header -->
        <div class="card-header border-0 font-weight-bold">Melhores ideias</div>

        <div class="media d-block d-md-flex mt-4">
            <img class="card-img-64 rounded-circle z-depth-1 d-flex mx-auto mb-3"
                 src="https://mdbootstrap.com/img/Photos/Avatars/img (20).jpg" width="90" alt="Generic placeholder image">
            <div class="media-body text-center text-md-left ml-md-3 ml-0">
                <h5 class="font-weight-bold mt-0">
                    <a class="text-default" href="">Miley Steward</a>
                    <a href="" class="pull-right text-default">
                        <i class="fas fa-reply"></i>
                    </a>
                </h5>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                <div class="media d-block d-md-flex mt-4">
                    <img class="card-img-64 rounded-circle z-depth-1 d-flex mx-auto mb-3"
                         src="https://mdbootstrap.com/img/Photos/Avatars/img (27).jpg" width="60"
                         alt="Generic placeholder image">
                    <div class="media-body text-center text-md-left ml-md-3 ml-0">
                        <h5 class="font-weight-bold mt-0">
                            <a class="text-default" href="">Tommy Smith</a>
                            <a href="" class="pull-right text-default">
                                <i class="fas fa-reply"></i>
                            </a>
                        </h5>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque
                        ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                    </div>
                </div>
                <div class="media d-block d-md-flex mt-3">
                    <img class="card-img-64 rounded-circle z-depth-1 d-flex mx-auto mb-3"
                         src="https://mdbootstrap.com/img/Photos/Avatars/img (21).jpg" width="60"
                         alt="Generic placeholder image">
                    <div class="media-body text-center text-md-left ml-md-3 ml-0">
                        <h5 class="font-weight-bold mt-0">
                            <a class="text-default" href="">Sylvester the Cat</a>
                            <a href="" class="pull-right text-default">
                                <i class="fas fa-reply"></i>
                            </a>
                        </h5>
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed
                        quia non numquam eius modi
                        tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                    </div>
                </div>

                <!-- Quick Reply -->
                <div class="md-form mt-4">
                    <label for="quickReplyFormComment">Your comment</label>
                    <textarea class="form-control md-textarea" id="quickReplyFormComment" rows="3"></textarea>

                    <div class="text-center my-4">
                        <button class="btn btn-default btn-sm btn-rounded" type="submit">Post</button>
                    </div>
                </div>


            </div>
        </div>
        <div class="media d-block d-md-flex mt-3">
            <img class="card-img-64 rounded-circle z-depth-1 d-flex mx-auto mb-3"
                 src="https://mdbootstrap.com/img/Photos/Avatars/img (30).jpg" width="90" alt="Generic placeholder image">
            <div class="media-body text-center text-md-left ml-md-3 ml-0">
                <h5 class="font-weight-bold mt-0">
                    <a class="text-default" href="">Caroline Horwitz</a>
                    <a href="" class="pull-right text-default">
                        <i class="fas fa-reply"></i>
                    </a>
                </h5>
                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti
                atque corrupti
                quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa
                officia deserunt mollitia animi, id est laborum et dolorum fuga.
            </div>
        </div>

        <!--Pagination -->
        <nav class="d-flex justify-content-center mt-5 display-posts">
            <ul class="pagination pagination-circle pg-teal mb-0">

                <!--First-->
                <li class="page-item disabled">
                    <a class="page-link">First</a>
                </li>

                <!--Arrow left-->
                <li class="page-item disabled">
                    <a class="page-link" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>

                <!--Numbers-->
                <li class="page-item active">
                    <a class="page-link">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link">4</a>
                </li>
                <li class="page-item">
                    <a class="page-link">5</a>
                </li>

                <!--Arrow right-->
                <li class="page-item">
                    <a class="page-link" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>

                <!--Last-->
                <li class="page-item">
                    <a class="page-link">Last</a>
                </li>

            </ul>
        </nav>
    </section>
    <!--Fim das postagens-->

</div>
</div>
<!--fim conteiner-->


@endsection
