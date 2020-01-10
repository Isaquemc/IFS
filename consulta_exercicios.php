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
    
    <title>Exercicios Cadastrados</title>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
<body>
    
    <?php include("cabecalho.php"); ?>
    
    <br>

    <?php
    
    ?>

    <hr>
    <!-- botão buscar -->
    <nav class="navbar navbar-expand-lg bg-gradient">
        <div class="collapse navbar-collapse col d-flex justify-content-right" id="navbarNav">
            <ul class="navbar-nav">
            <form class="form-inline" action="" method="post">
                <label for="buscar" class="col-sm-0 col-form-label">Informe os dados</label>
                <input class="form-control ml-3 mr-3" id="buscar" name="Buscar" type="search" placeholder="Buscar exercicio..." value="">
                
                <div class="form-check form-check-inline">                
                <button class="btn btn-light" type="submit">Ok</button>
            
                </div>
                
            </form>
        </ul>
        </div>
            <div class="collapse navbar-collapse col d-flex justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                <form class="form-check form-check-inline" action="alterar_exercicio.php" method="post">
                    <label for="alterar" class="col-sm-0 col-form-label">Informe o Código do Exercicio</label>
                    <input class="form-control ml-3 mr-3" id="alterar" name="Alterar" type="search" placeholder="Alterar exercicio..." style="width: 150px;">
                    <button class="btn btn-light" type="submit">Alterar</button> 
                </form>
                </ul>
            </div>
            <div class="collapse navbar-collapse col d-flex justify-content-right" style="" id="navbarNav"> 
                <ul class="navbar-nav">
                <form class="form-check form-check-inline" action="excluir_exercicio.php" method="post">
                    <label for="excluir" class="col-sm-0 col-form-label">Informe o ID</label>
                    <input class="form-control ml-3 mr-3" id="excluir" name="Excluir" type="search" placeholder="Excluir exercicio..." style="width: 150px;">
                    <button class="btn btn-light" type="submit">Excluir</button>
                </form>
                </ul>
        </div>
    </nav>
    <br>
    <form class="form-check form-check-inline" action="" method="post">
        <button class="btn btn-outline-dark" type="submit" name="Tudo" value="1">Mostrar Tudo</button>
    </form>
    <hr>

    <br> 

    <?php 
    include_once ("Conexaobd.php");  


    $lista = "SELECT exercicios.cod_exercicio, exercicios.Treinamento_cod_treinamento, tipo_exercicio.descricao, exercicios.series_repeticoes, exercicios.carga_tempo, exercicios.observacoes, exercicios.treino_tipo  FROM exercicios, tipo_exercicio WHERE tipo_exercicio.tipo_exercicio=Tipo_exercicio_tipo_exercicio ORDER by cod_exercicio ASC"; 
        
        
    if(isset($_POST['Buscar'])){
        $buscar = $_POST['Buscar'];

        $lista = "SELECT exercicios.cod_exercicio, exercicios.Treinamento_cod_treinamento, tipo_exercicio.descricao, exercicios.series_repeticoes, exercicios.carga_tempo, exercicios.observacoes, exercicios.treino_tipo FROM exercicios, tipo_exercicio WHERE exercicios.cod_exercicio LIKE '$buscar' ORDER BY exercicios.cod_exercicio ASC";
    }
        
        
    //if(isset($_POST['Check-type-search'])){
      //  $op = $_POST['Check-type-search'];
            
        //Consulta o BD
        //if($op == 'Matricula'){
           // $lista = "SELECT * FROM treinamento WHERE cod_treinamento LIKE '%$buscar%' ORDER BY cod_treinamento DESC";
        
        //}else if($op == "Nome"){
          //  $lista = "SELECT * FROM treinamento WHERE cod_treinamento LIKE '%$buscar%' ORDER BY cod_treinamento DESC";
        //}
    //}

        
    $result_user = mysqli_query($conn, $lista); 
    ?>

    <div class="col d-flex justify-content-center">
        <div class="card">
            <div class="card-body" style="width: 100%;"> 
                <h3>Dados do Treinamento</h3>
                <span id="conteudo"></span>
                    <table class="table table-bordered" >
                        <thead class="thead-dark">
                            <tr>
                                <th scope="row">Código</th>
                                <th scope="row">Código Treinamento</th>
                                <th scope="row">Tipo Exercício</th>
                                <th scope="row">Series e repetições</th>
                                <th scope="row">Carga</th>
                                <th scope="row">Observações</th>
                                <th scope="row">Tipo do Treino</th>
                            </tr>
                        </thead>
    <tbody>

    <?php
        
    //verifica se encontrou algo na tabela
    if(($result_user) and ($result_user->num_rows != 0)){
        while($linha_usuario = mysqli_fetch_assoc($result_user)){
            
            ?>

                <?php 
                if($linha_usuario['treino_tipo'] == "a"){
                    $tipo = implode('Membros Superiores', array_reverse(explode('a', $linha_usuario['treino_tipo'])));
                }else

                if($linha_usuario['treino_tipo'] == "b"){
                    $tipo = implode('Membros Inferiores', array_reverse(explode('b', $linha_usuario['treino_tipo'])));
                }
                ?>

                <tr> 
                    <th scope="row"><?php echo $linha_usuario['cod_exercicio']. "<br>"; ?></th>
                    <td><?php echo $linha_usuario['Treinamento_cod_treinamento']. "<br>"; ?> </td>
                    <td><?php echo $linha_usuario['descricao']. "<br>"; ?> </td>
                    <td><?php echo $linha_usuario['series_repeticoes']. "<br>"; ?> </td>
                    <td><?php echo $linha_usuario['carga_tempo']. "<br>"; ?> </td>
                    <td><?php echo $linha_usuario['observacoes']. "<br>"; ?> </td>
                    <td><?php echo $tipo. "<br>"; ?> </td>
                </tr>

            <?php
            
        }
    }else{
        ?>
        <tr>
            <th scope="row">Nenhum registro encontrado!</th>
        </tr>
        <?php
    }
    ?> 

        </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    </body>
</html>