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
    
    <title>Aparelhos Cadastrados</title>
        
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
                <label for="buscar" class="col-sm-0 col-form-label">Nome do aparelho</label>
                <input class="form-control ml-3 mr-3" id="buscar" name="Buscar" type="search" placeholder="Buscar aparelho..." value="">
                
                <div class="form-check form-check-inline">                
                <button class="btn btn-light" type="submit">Ok</button>
            
	            </div>
                
            </form>
        </ul>
        </div>
            <div class="collapse navbar-collapse col d-flex justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                <form class="form-check form-check-inline" action="alterar_aparelho.php" method="post">
                    <label for="alterar" class="col-sm-0 col-form-label">Informe o ID</label>
                    <input class="form-control ml-3 mr-3" id="alterar" name="Alterar" type="search" placeholder="Alterar aparelho..." style="width: 150px;">
                    <button class="btn btn-light" type="submit">Alterar</button> 
                </form>
                </ul>
            </div>
            <div class="collapse navbar-collapse col d-flex justify-content-left" id="navbarNav"> 
                <ul class="navbar-nav">
                <form class="form-check form-check-inline" action="excluir_aparelho.php" method="post">
                    <label for="excluir" class="col-sm-0 col-form-label">Informe o ID</label>
                    <input class="form-control ml-3 mr-3" id="excluir" name="Excluir" type="search" placeholder="Excluir aparelho..." style="width: 150px;">
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
include ("Conexaobd.php");  


$lista = "SELECT * FROM tipo_exercicio ORDER BY tipo_exercicio ASC"; 
    
    
if(isset($_POST['Buscar'])){
    $buscar = $_POST['Buscar'];

    $lista = "SELECT * FROM tipo_exercicio WHERE descricao LIKE '%$buscar%' ORDER BY tipo_exercicio ASC"; 
}
    
    
/*if(isset($_POST['Check-type-search'])){
     $op = $_POST['Check-type-search'];
        
    //Consulta o BD
    if($op == 'Matricula'){
        $lista = "SELECT * FROM aluno WHERE matricula_aluno LIKE '%$buscar%' ORDER BY matricula_aluno DESC";
    
    }else if($op == "Nome"){
        $lista = "SELECT * FROM aluno WHERE nome_aluno LIKE '%$buscar%' ORDER BY matricula_aluno DESC";
    }
}
*/

    
$result_user = mysqli_query($conn, $lista); 
?>


<div class="col d-flex justify-content-center">
    <div class="card">
        <div class="card-body" style="width: 100%;"> 
            <h3>Dados dos Aparelhos</h3><br>
            <span id="conteudo"></span>
                <table class="table table-bordered" >
                    <thead class="thead-dark">
                        <tr>
                            <th scope="row">ID</th>
                            <th scope="row">Descrição</th>
                        </tr>
                    </thead>
<tbody>

<?php
    
//verifica se encontrou algo na tabela
if(($result_user) and ($result_user->num_rows != 0)){
    while($linha_usuario = mysqli_fetch_assoc($result_user)){
        
        ?>
            <tr>      
                <th scope="row"><?php echo $linha_usuario['tipo_exercicio']. "<br>"; ?></th>
                <td><?php echo $linha_usuario['descricao']. "<br>"; ?> </td>              
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