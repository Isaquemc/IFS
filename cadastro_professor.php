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
    
      <title>Cadastro do Professor</title>
      
      
  </head>
<body>
    
    <?php include("cabecalho.php"); ?>
    
    <br>
    <br>
    <br>
    
   
    <form action="inserir_professor.php" method="post"> 
    <div class="col d-flex justify-content-center">
    <div class="card" style="height: 38rem; width: 40rem;">
        <div class="card-body">
            <h2 class="mb-2">Cadastro Professor</h2> <br>
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
                 <input type="text" name="CPF" id="cpf" class="form-control" placeholder="CPF" aria-label="CPF" aria-describedby="basicaddon1" required> 
                 <label style="color: red;">*</label>
                 <input type="text" name="Matricula" class="form-control ml-2" placeholder="Matrícula" aria-label="Matrícula" aria-describedby="basicaddon1" required> 
                 <label style="color: red;">*</label>
            </div>
            
            <div class="input-group mb-3">
                 <input type="text" style="width: 0rem;" name="Telefone" id="telefone" class="form-control" placeholder="Telefone" aria-label="Telefone" aria-describedby="basicaddon1" required>
                 <label style="color: red;" class="mr-2">*</label>

                 <input type="date" name="Data" id="data" class="form-control" placeholder="Data de Nascimento" aria-label="Data Nascimento" aria-describedby="basicaddon1" required> 
                 <label style="color: red;">*</label>
            </div>

            <label style="">Senha</label>
            <div class="input-group mb-3">
                 <input type="password" name="Senha" id="senha" class="form-control" placeholder="Caracteres: minimo 4, máximo 20" aria-label="Senha" aria-describedby="basicaddon1" required> 
                 <label style="color: red;">*</label>
            </div>

<!-- checkbox sexo-->
            <label style="center 15px;">Sexo</label>
            <label style="color: red;">*</label>
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Check-type-sexo" value="m" required checked>
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
        $("#cpf").mask("000.000.000-00");
    </script>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    
</body>
</html>