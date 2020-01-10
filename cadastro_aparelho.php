
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
      
    <title>Cadastro do Professor</title>
  </head>
  <body>
      
    <?php include("cabecalho.php"); ?>  
      
    <br>
    <br>
    <br>
      
    <form action="inserir_aparelho.php" method="post" enctype="multipart/form-data">
        <div class="col d-flex justify-content-center">
            <div class="card" style="height: 20rem; width: 35rem;">
                <div class="card-body">
                    <h2 class="mb-2">Cadastro de Aparelhos</h2> <br>
                    <div class="col justify-content-right" style="text-align: right;">
                        <label style="color: red;">* Obrigatório</label>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Descrição</span>
                        </div>
                        <textarea class="form-control" aria-label="Describle" name="Descricao"></textarea>
                        <label style="color: red;">*</label>
                    </div>
                    <br>
                    <br>
                    <div align="center">
                        <button type="submit" class="btn btn-success mr-2">Confirmar</button>
                        <button type="reset" class="btn btn-warning mr-2">Limpar Campos</button>
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