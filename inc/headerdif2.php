<header>
    <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg  scrolling-navbar navbar-light double-nav navbar-transparente container-fluid">
        <!-- <a href="index.html" class="navbar-brand"> -->
        <a href="index.php"><img src="assets/img/logorev1.png" width="60"></a>
        <span href="index.php" >Digital Tour</span>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <!-- <a class="navbar-brand" href="#">DIGITAL TOUR</a> -->
            <ul class="navop navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item exibindo">
                <a class="h5 nav-link" data-toggle="modal" data-target="#exampleModal"> <i class="fas fa-user"></i> Login</a>
              </li>
              <li class="nav-item">
                <a class="h5 nav-link" href="sobrenos.php"><i class="fas fa-globe"></i> Quem Somos</a>
              </li>
              <li class="nav-item">
                <a class="h5 nav-link" href="faq.php"> <i class="fas fa-info"></i>  FAQ</a>
              </li>
              <li class="nav-item">
                <a class="h5 nav-link" href="cadastro.php"><i class="fas fa-comments"></i> Chat</a>
              </li>
              <li class="nav-item">
                <a class="h5 nav-link" href="contato.php"><i class="fas fa-envelope"></i> Contato</a>
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
      <div class="modal-body">

              <div class="form-group">
                <label for="exampleDropdownFormEmail2">E-mail:</label>
                <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="E-mail">
              </div>
              <div class="form-group">
                <label for="exampleDropdownFormPassword2">Senha:</label>
                <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Senha">
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                <label class="form-check-label" for="dropdownCheck2">
                  Lembre me
                </label>
                <a href="#">Esqueceu sua senha?</a>
              </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
        <button type="button" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>