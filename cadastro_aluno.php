<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
      
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
      
    <link rel="stylesheet" href="mystyle.css">
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    
      <title>Cadastro do Aluno</title>
      
      
  </head>
<body>
    
    <?php include("cabecalho.php"); ?>
    
    <br>
    <br>
    <br>
    
   
    <form action="inserir_aluno.php" method="POST"> 
    <div class="col d-flex justify-content-center">
    <div class="card" style="height: 45rem; width: 40rem;">
        <div class="card-body">
            <h2 class="mb-2">Cadastro Aluno</h2> <br>
            <div class="col justify-content-right" style="text-align: right;">
                <label style="color: red;">* Obrigatório</label>
            </div>
            <div class="input-group mb-3">              
                <input type="text" name="Nome" class="form-control" placeholder="Nome" aria-label="Nome" aria-describedby="basicaddon1" required> 
                <label style="color: red;">*</label> 
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" name="Email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basicaddon1" required>
                <label style="color: red;">*</label> 
            </div>
            
            <div class="input-group mb-3">
                 <input type="text" name="CPF" id="cpf" class="form-control mr-2" placeholder="CPF" aria-label="CPF" aria-describedby="basicaddon1" required>
                 <label style="color: red;">*</label> 
                 <input type="text" name="Matricula" class="form-control" placeholder="Matrícula" aria-label="Matrícula" aria-describedby="basicaddon1" required> 
                 <label style="color: red;">*</label>
            </div>
            
            <div class="input-group mb-3">
                 <input type="text" name="Telefone" id="telefone" class="form-control" placeholder="Telefone" aria-label="Telefone" aria-describedby="basicaddon1" required>
                 <label style="color: red;">*</label>
            </div>
            
            <div class="input-group mb-3">
                 <input type="text" name="Data" id="data" class="form-control" placeholder="Data de Nascimento" aria-label="Data Nascimento" aria-describedby="basicaddon1" required> 
                 <label style="color: red;">*</label>
            </div>
<!-- checkbox tipo de aluno-->
            <label style="center 15px;">Tipo de Aluno</label>
            <label style="color: red;">*</label>
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Check-type-aluno" value="a" checked required>
                <label class="form-check-label" for="TipoAluno">Aluno</label>
	        </div>
            
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Check-type-aluno" value="s" required>
                <label class="form-check-label" for="TipoAluno">Servidor</label> 
	        </div>

            <br>
            <br>
<!-- checkbox sexo-->
            <label style="center 15px;">Sexo</label>
            <label style="color: red;">*</label>
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Check-type-sexo" value="m" checked required>
                <label class="form-check-label" for="tipoSexo">Masculino</label> 
	        </div>
            
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Check-type-sexo" value="f" required>
                <label class="form-check-label" for="tipoSexo">Feminino</label> 
	        </div>
            
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Check-type-sexo" value="o" required>
                <label class="form-check-label" for="tipoSexo">Outro</label>
	        </div>
            
            <br> 
            <br>
            
            <label style="center 15px;">Situação</label>
            <label style="color: red;">*</label>
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Check-type-situacao" value="1" required checked>
                <label class="form-check-label" for="tipoSexo">Ativo</label> 
	        </div>
            
            <br>
            <br>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success mr-2">Confirmar</button>
                    <button type="reset" class="btn btn-warning mr-2">Limpar Campos</button>
                </div>
            </div>
        </div>
        </div>
        </div>
    </form>

    
    <script type="text/javascript">
        $("#telefone").mask("(00) 00000-0000");
        $("#data").mask("00/00/0000");
        $("#cpf").mask("000.000.000-00");
    </script>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    
</body>
</html>