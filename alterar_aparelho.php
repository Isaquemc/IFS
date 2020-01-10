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
      
    <title>Alterar Aparelho</title>
  </head>
  <body>
      
    <?php include("cabecalho.php"); ?>  
      
    <br>
    <br>
    <br>
      
      <?php 
      include('Conexaobd.php');
      
      $id = $_POST['Alterar'];
      $lista = "SELECT * FROM tipo_exercicio WHERE tipo_exercicio = '$id'";
      $result_user = mysqli_query($conn, $lista);
      $linha = mysqli_fetch_assoc($result_user);
      ?>
      
      

<form action="alterar_dadosaparelho.php" method="post">
        <div class="col d-flex justify-content-center">
            <div class="card" style="height: 20rem; width: 35rem;">
                <div class="card-body">
                    <h2 class="mb-2">Alterar dados do Aparelho</h2> <br>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Descrição</span>
                        </div>
                        <textarea class="form-control" aria-label="Describle" value="<?php echo $linha['descricao']; ?>" name="Descricao"></textarea>
                    </div>
                    <br>
                    <input class="form-control" name="id" value="<?php echo $id; ?>" hidden>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" name="Foto" class="custom-file-input" id="file" aria-describedby="FileImage" hidden>
                        </div> 
                    </div>
                    <br>
                    <div align="center">
                        <button type="submit" class="btn btn-success mr-2">Confirmar</button>
                        <button type="reset" class="btn btn-warning mr-2" style="width: 10rem;">Limpar Campos</button>
                        <a class="btn btn-primary" href="consulta_aparelhos.php" role="button">Alunos Cadastrados</a>
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