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
    
    <title>Selecionar Aluno</title>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
<body>
    
    <?php include("cabecalho.php"); ?>
    
    <br>
    
    <?php
    
    ?>
    
    <hr>
    <!-- botão buscar -->
    <form class="form" action="pdf_treinamento.php" method="post">
    <div class="col d-flex justify-content-center">
        <div class="card" style="height: 11rem; width: 20rem;">
            <div class="card-body">
                <label for="buscar" class="col-sm-0 col-form-label">Informe a matrícula do aluno</label>
                <input class="form-control mb-3" id="buscar" name="Buscar" type="number" placeholder="Matricula do aluno..." value="">
                <center><button class="btn btn-outline-dark" type="submit">Gerar PDF</button></center>
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