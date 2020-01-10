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
    
    
    <form action="inserir_exercicios.php" method="POST"> 
    <div class="col d-flex justify-content-center">
    <div class="card" style="height: 28rem; width: 40rem;">
        <div class="card-body">
            <h2 class="mb-2">Cadastro dos Exercícios</h2> <br>
            <div class="col justify-content-right" style="text-align: right;">
                <label style="color: red;">* Obrigatório</label>
            </div>
            <div class="input-group mb-3">
                <input type="number" name="CodTreinamento" class="form-control" placeholder="Código Treinamento" aria-label="CodTreinamento" aria-describedby="basicaddon1" required>
                <label style="color: red;">*</label> 
                <input type="text" name="TipoExercicio" class="form-control ml-3" placeholder="Código Tipo do Exercicio" aria-label="TipoExercicio" aria-describedby="basicaddon1" required> 
                <label style="color: red;">*</label>
            </div>

            <div class="input-group mb-3">
                <input type="text" name="SeriesRep" class="form-control" placeholder="Series e repetições" aria-label="Series" aria-describedby="basicaddon1" required>
                <label style="color: red;">*</label>
                <input type="text" name="CargaTempo" class="form-control ml-3" placeholder="Carga" aria-label="CargaTempo" aria-describedby="basicaddon1" id="carga" required> 
                <label style="color: red;">*</label>
            </div>

            <div class="input-group mb-3">
                    <textarea class="form-control justify-content-left" style="height: 5rem;" aria-label="Describle" placeholder="Observacões pertinentes" name="Observacoes"></textarea>
                    <label style="color: red;">*</label>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1" class="ml-5">Tipo do Treinamento</label>
                        <label style="color: red;">*</label>
                        <select name="TipoT" class="form-control ml-5" style="width: 15rem;">
                            <option value="Superior">Membros Superiores</option>
                            <option value="Inferior">Membros Inferiores</option>
                        </select>
                    </div>
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
        $("#carga").mask("000.00KG");
    </script>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    
</body>
</html>