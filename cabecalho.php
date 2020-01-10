 <!-- navbar contendo os dados gerais -->
      <nav class="navbar navbar-expand-lg bg-gradient">
          
          <div class="container mb-0">
          
              
              <a class="row-fluid mr-0" href="index.php">
              <img src="img/ifs.png" class="img-rounded">
                  
              </a>
              <h1 class="mr-4">Academia NAPUT</h1>

              <button class="navbar-toggler" type="button" data-toggle="collapse" dataSite">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSite">

                <ul class="navbar-nav mr-0">
                <!--itens do navbar-->
                
                  <li class="nav-item">
                     <a class="nav-link h6 mb-0 ml-0" href="index.php">Início</a> 
                  </li>
                </ul>
                     
                  
                  <ul class="nav navbar-nav ml-0">
                      <li class="nav-item dropdown">
                          <a class="nav-link active dropdown-toggle h6 mb-0" id="dropdownMenu" style="cursor: pointer;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastros</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                                    <a class="dropdown-item" href="cadastro_professor.php">Professor</a>
                                    <a class="dropdown-item" href="cadastro_aluno.php">Aluno</a>
                                    <a class="dropdown-item" href="cadastro_aparelho.php">Aparelhos</a>
                                    <a class="dropdown-item" href="cadastro_exercicios.php">Exercícios</a>
                                    <a class="dropdown-item" href="cadastro_treinamento.php">Treinamento</a>
                                </div>
                         </li>
                  </ul>


                  <ul class="nav navbar-nav ml-0">
                      <li class="nav-item dropdown">
                          <a class="nav-link active dropdown-toggle h6 mb-0" id="dropdownMenu" style="cursor: pointer;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listagens</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                                    <a class="dropdown-item" href="consulta_prof.php" target="_blank">Professores Cadastrados</a>
                                    <a class="dropdown-item" href="consulta.php" target="_blank">Alunos Cadastrados</a>
                                    <a class="dropdown-item" href="consulta_aparelhos.php" target="_blank">Aparelhos Cadastrados</a>
                                    <a class="dropdown-item" href="consulta_exercicios.php" target="_blank">Exercícios Cadastrados</a>
                                    <a class="dropdown-item" href="consulta_treinamento.php" target="_blank">Treinamentos Cadastrados</a>
                                </div>
                         </li>
                  </ul>
                  
                  
                 <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                     <a class="nav-link h6 mb-0 mr-0" href="registrar_freq.php">Registrar Frequência</a> 
                  </li>
                    
                    <ul class="nav navbar-nav ml-0 mr-0">
                      <li class="nav-item dropdown">
                          <a class="nav-link active dropdown-toggle h6 mb-0" id="dropdownMenu" style="cursor: pointer;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Consultas</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                                    <a class="dropdown-item" href="aluno_treinamento.php">Ficha de Treinamento</a>
                                    <a class="dropdown-item" href="aluno_frequencia.php">Alunos Ativos sem Frequência</a>
                                    <a class="dropdown-item" href="aluno_medica.php">Situação Médica</a>
                                    <a class="dropdown-item" href="aluno_aniversario.php">Aniversariantes</a>
                                    <a class="dropdown-item" href="pdf_exercicios.php">Exercícios Disponíveis</a>
                                    <a class="dropdown-item" href="aluno_validade.php">Validade da Ficha de Treinamento</a>
                                </div>
                         </li>
                  </ul>
                     
                     <!--opções de informações-->  
                
                <ul class="nav navbar-nav ml-0">
                      <li class="nav-item dropdown">
                          <a class="nav-link active dropdown-toggle h6 mb-0" id="dropdownMenu" style="cursor: pointer;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Informações</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                                    <a class="dropdown-item" href="https://www.ifs.edu.br">IFS</a>
                                    <a class="dropdown-item" href="https://sigaa.ifs.edu.br/sigaa/verTelaLogin.do">SIGAA</a>
                                </div>
                         </li>
                  </ul>

                  </ul>
                  
                  <form action="logout.php" method="post">
                    <div class="form-group row mb-0">
                        <div class="col-sm-10">
                        <button type="submit" class="btn btn-light ml-2 mb-0">Sair</button>
                        </div>
                    </div>  
                  </form>

            </div>
    
        </div>
    
      </nav>