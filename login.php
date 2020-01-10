<?php
if(!isset($_SESSION))
    session_start();

//Login de Usários
if(isset($_POST['login'])){

  include('Conexaobd.php');
  
  $erro = array();

  // Captação de dados
    $senha = $_POST['password'];
    $_SESSION['email'] = $conn->escape_string($_POST['email']);

    // Validação de dados
    if(!filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL))
        $erro[] = "Preencha seu <strong>e-mail</strong> corretamente.";

    if(strlen($senha) < 4 || strlen($senha) > 20)
        $erro[] = "Preencha sua <strong>senha</strong> corretamente.";

    if(count($erro) == 0){

        $sql = "SELECT senha as senha, matricula_prof as valor 
        FROM professor 
        WHERE email_prof = '$_SESSION[email]'";
        $que = $conn->query($sql) or die($conn->error);
        $dado = $que->fetch_assoc();
        
        if($que->num_rows == 0)
            $erro[] = "Nenhum usuário possui o <strong>e-mail</strong> informado.";

        elseif(strcmp($dado['senha'], ($senha)) == 0){
            $_SESSION['professor_logado'] = $dado['valor'];
        }else
            $erro[] = "<strong>Senha</strong> incorreta.";

        if(count($erro) == 0){
            echo "<script>alert('Usuário está logado!')</script>";
            echo "<script>location.href='http://localhost/naput/index.php';</script>";
            exit();
            unset($_SESSION['email']);
        }

    }


}

?>
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

</head>
<body>
    
    <?php include("cabecalho_aluno.php"); ?>
<br>
<br>
<br>
    <div class="col d-flex justify-content-center" align="center">
        <div class="card" style="height: 21rem; width: 25rem;">
            <div class="card-body">
                        <h3 class="panel-title">Login</h3>
                    </div>
                        <?php 
                        if(isset($erro)) 
                            if(count($erro) > 0){ ?>
                                <div class="alert alert-danger mb-4">
                                    <?php foreach($erro as $msg) echo "$msg <br>"; ?>
                                </div>
                            <?php 
                            }
                            ?>
    
                        <form method="post" action="" role="form">
                            <fieldset>
                                <div class="input-group mb-3">
                                    <input value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email']; ?>" class="form-control ml-4 mr-4" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <input class="form-control mb-2 ml-4 mr-4" required placeholder="Senha" name="password" type="password" value="">
                                </div>

                                
                                <button type="submit" name="login" value="true" class="btn btn-success btn-block mb-4" style="width: 15rem;">Login</button>
                            </fieldset>
                        </form>
        
      
                    </div>

    </div>
</body>

</html>