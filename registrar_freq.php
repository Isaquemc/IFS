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
    
    <title>Registrar Frequência</title>
      
  </head>
<body>
    
    <?php include("cabecalho.php"); ?>
    
    <br>
    <br>
    <br>
    
    <form action="inserir_freq.php" method="POST"> 
    <div class="col d-flex justify-content-center">
    <div class="card" style="height: 17rem; width: 21rem;">
        <div class="card-body">
            <h2 class="mb-2">Registrar Frequência</h2> <br>
            <div class="input-group mb-3">
                <span class="input-group-text" style="width: 32%;" id="basic-addon1">Matrícula</span>
                <input type="text" name="Matricula" class="form-control" placeholder="Informe a Matrícula" aria-label="Matrícula" aria-describedby="basicaddon1" required>
            </div>
            <br>
            <div class="form-group row">
            
                    <button type="submit" class="btn btn-success ml-4 mr-2">Confirmar</button>
                    <a class="btn btn-primary" href="exibir_freq.php" role="button">Frequência</a>
            </div>
        </div>
        </div>
        </div>
    </form>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>