<!doctype html>
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
    
    <title>Alterar dado Professor</title>
  </head>
<body>
    
    <?php include("cabecalho.php"); ?>
    
    <br>
    
    <?php 
    include_once("Conexaobd.php");
    
    //$format = date_create("d-m-Y");
    //$nasc = $_SESSION['Data'];
    //$nascimento = date_create_from_format($nasc, $format);
    
    
    
    $mat = $_POST['Alterar']; 
    
    $lista = "SELECT * FROM professor WHERE matricula_prof = '$mat'";
    $result_user = mysqli_query($conn, $lista);
    $linha = mysqli_fetch_assoc($result_user);
    
    
    $nascimento = implode('/', array_reverse(explode('-', $linha['aniversario_prof'])));
    ?>
    
    <br>
    
    <form action="alterar_dadosprof.php" method="POST"> 
    <div class="col d-flex justify-content-center">
    <div class="card" style="height: 38rem; width: 40rem;">
        <div class="card-body">
            <h2 class="mb-2">Alterar dados do professor <?php echo $mat; ?></h2> <br>
            <div class="input-group mb-3">
                <input type="text" name="Nome" class="form-control" placeholder="Nome" aria-label="Nome" aria-describedby="basicaddon1" value="<?php echo $linha['nome_prof']; ?>" required> 
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" name="Email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basicaddon1" value="<?php echo $linha['email_prof']; ?>" required>
            </div>
            
            <div class="input-group mb-3">
                 <input type="text" name="CPF" id="cpf" class="form-control mr-2" placeholder="CPF" aria-label="CPF" aria-describedby="basicaddon1" value="<?php echo $linha['cpf_prof']; ?>" required> 
                 <input type="text" name="Matricula" class="form-control" placeholder="Matrícula" aria-label="Matrícula" aria-describedby="basicaddon1" value="<?php echo $linha['matricula_prof']; ?>" required hidden> 
            </div>
            
            <div class="input-group mb-3">
                 <input type="text" name="Telefone" id="telefone" class="form-control" placeholder="Telefone" aria-label="Telefone" aria-describedby="basicaddon1" value="<?php echo $linha['telefone_prof']; ?>" required>
            </div>
            
            <div class="input-group mb-3">
                 <input type="text" name="Data" id="data" class="form-control" placeholder="Data de Nascimento" aria-label="Data Nascimento" aria-describedby="basicaddon1" value="<?php echo $nascimento; ?>" required> 
            </div>

             <div class="input-group mb-3">
                 <input type="password" name="Senha" id="senha" class="form-control" placeholder="senha" aria-label="senha" aria-describedby="basicaddon1" value="<?php echo $linha['senha']; ?>" required> 
            </div>

<!-- checkbox sexo-->
            <label style="center 15px;">Sexo</label><br><div class="form-check form-check-inline">
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
                    <button type="submit" class="btn btn-success mr-2">Alterar</button>
                    <a class="btn btn-primary" href="consulta_prof.php" role="button">Professores Cadastrados</a>
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