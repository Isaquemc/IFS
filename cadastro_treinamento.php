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
    
      <title>Cadastro do Treinamento</title>
      
      
  </head>
<body>
    
    <?php include("cabecalho.php"); ?>
    
    <br>
    <br>
    <br>
    
    
    <form action="inserir_treinamento.php" method="POST"> 
    <div class="col d-flex justify-content-center">
    <div class="card" style="height: 28rem; width: 40rem;">
        <div class="card-body">
            <h2 class="mb-2">Cadastro do Treinamento</h2> <br>
            <div class="col justify-content-right" style="text-align: right;">
                <label style="color: red;">* Obrigatório</label>
            </div>
            <div class="input-group mb-3">
                <input type="text" name="MatriculaP" class="form-control mr-3" placeholder="Matrícula do Professor" aria-label="Matrícula" aria-describedby="basicaddon1" required>
                <label style="color: red;">*</label>
                <input type="text" name="MatriculaA" class="form-control" placeholder="Matrícula do Aluno" aria-label="Matrícula" aria-describedby="basicaddon1" required> 
                <label style="color: red;">*</label>
            </div>
            
            <div class="input-group mb-3">
                 <input type="text" name="inicioTreinamento" id="data" class="form-control mr-3" placeholder="Inicio do treinamento" aria-label="Data Nascimento" aria-describedby="basicaddon1" required>
                 <label style="color: red;">*</label> 
                <input type="text" name="fimTreinamento" id="data1" class="form-control" placeholder="Fim do treinamento" aria-label="Data Nascimento" aria-describedby="basicaddon1" required> 
                <label style="color: red;">*</label>
            </div>
            <br>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Tipo do Treinamento</label>
                <label style="color: red;">*</label>
                <select name="TipoT" class="form-control" style="width: 17.5rem;">
                    <option value="Superior">Membros Superiores</option>
                    <option value="Inferior">Membros Inferiores</option>
                </select>
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
        $("#data1").mask("00/00/0000");
        $("#cpf").mask("000.000.000-00");
    </script>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    
</body>
</html>