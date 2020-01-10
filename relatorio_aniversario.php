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
      
    <title>Academia NAPUT</title>
  </head>
  <body>

      
<?php include("cabecalho.php"); ?>

<?php

function_autoload($classe){
  if(file_exists("app.do/{$classe}.class.php")){
    include_once "app.ado/{$classe}.class.php";
  }
}

try{
  $conn = TConnection::open('exemplo');

  $sql = "SELECT * FROM aluno ORDER BY matricula_aluno DESC";

  $handle = fopen('app.output/output.txt', 'w');
  $result = $conn -> query($sql);

  $linha = str_pad('Nome', 10, ' ', STR_PAD_RIGHT).' | ';
  $linhaa = str_pad('Data', 10, ' ', STR_PAD_RIGHT).' | ';
?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
  </body>
</html>