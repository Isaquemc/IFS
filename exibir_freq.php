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
    
<?php 
include_once ("Conexaobd.php");  


$lista = "SELECT * FROM frequencia ORDER BY cod_frequencia ASC"; 
$result_user = mysqli_query($conn, $lista); 
?>

<div class="col d-flex justify-content-center">
    <div class="card">
        <div class="card-body" style="width: 100%;"> 
            <h3>Dados dos Alunos</h3>
            <span id="conteudo"></span>
                <table class="table table-bordered" >
                    <thead class="thead-dark">
                        <tr>
                            <th scope="row">Código Frequência</th>
                            <th scope="row">Matrícula</th>
                            <th scope="row">Hora do Registro</th>
                            <th scope="row">Data do Registro</th>
                        </tr>
                    </thead>
                    <tbody>

<?php
    
//verifica se encontrou algo na tabela
if(($result_user) and ($result_user->num_rows != 0)){
    while($linha_usuario = mysqli_fetch_assoc($result_user)){
        
        ?>
            <tr> 
                <?php 
                    //$hora = implode(':', array_reverse(explode(':', $linha_usuario['hora_frequencia'])));     
                    $data = implode('/', array_reverse(explode('-', $linha_usuario['data_frequencia']))); 
                ?>
                <th scope="row"><?php echo $linha_usuario['cod_frequencia']. "<br>"; ?></th>
                <td><?php echo $linha_usuario['Aluno_matricula_aluno']. "<br>"; ?> </td>
                <td><?php echo $linha_usuario['hora_frequencia']. "<br>"; ?> </td>
                <td><?php echo $data. "<br>"; ?> </td>
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