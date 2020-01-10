<!-- navbar contendo os dados gerais -->
      <nav class="navbar navbar-expand-lg bg-gradient">
          
          <div class="container mb-2">
          
              
              <a class="row-fluid mr-3" href="index_aluno.php">
              <img src="img/ifs.png" class="img-rounded">
                  
              </a>
              <h1 class="mr-4">Academia NAPUT</h1>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSite">

                <ul class="navbar-nav mr-0">
                <!--itens do navbar-->
                
                  <li class="nav-item">
                     <a class="nav-link h6 mb-0 ml-0 mr-0" href="index_aluno.php">Início</a> 
                  </li>
                </ul>
                     
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                     <a class="nav-link h6 mb-0" href="registrar_freq_aluno.php">Registrar Frequência</a> 
                  </li>
                      
                <!--opções de informações-->  
                <ul class="nav navbar-nav ml-0 mb-0">
                      <li class="nav-item dropdown">
                          <a class="nav-link active dropdown-toggle h6 mb-0" id="dropdownMenu" style="cursor: pointer;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Informações</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                                    <a class="dropdown-item" href="https://www.ifs.edu.br">IFS</a>
                                    <a class="dropdown-item" href="https://sigaa.ifs.edu.br/sigaa/verTelaLogin.do">SIGAA</a>
                                </div>
                         </li>
                  </ul>
                
                  
                
                  
                  <form action="login.php" method="post">
                    <div class="form-group col d-flex row mb-0" align="right">
                        <div class="col-sm-10">
                        <button type="submit" class="btn btn-success ml-2 mb-0" style="background: white; color: black;">Login</button>
                        </div>
                    </div>  
                  </form>
        </div>
    </div>
</nav>