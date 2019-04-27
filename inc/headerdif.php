<header>
    <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar navbar-light double-nav navbar-transparente container-fluid">
        <!-- <a href="index.html" class="navbar-brand"> -->
        <img  src="assets/img/logorev1.png" width="60">
        <span >Digital Tour</span>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
        </button>   
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <!-- <a class="navbar-brand" href="#">DIGITAL TOUR</a> -->
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">    
                <li class="nav-item ">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">Login</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="sobrenos.php">Quem Somos</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="faq.php">FAQ</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="cadastro.php">Cadastre-se</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="contato.php">Contato</a>
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