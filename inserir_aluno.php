<?php
	include("Conexaobd.php");

	$nome = $_POST['Nome'];
    $email = $_POST['Email'];
    $cpf = $_POST['CPF'];
    $_SESSION['cpf'] = true;
    $matricula = $_POST['Matricula'];
    $telefone = $_POST['Telefone'];
    $nasc = $_POST['Data'];
    $nascimento = implode('-', array_reverse(explode('/', $nasc)));
    if (isset($_POST['Check-type-situacao'])){
        $situacao = $_POST['Check-type-situacao'];
    }
    
    if (isset($_POST['Check-type-aluno'])){
        $tipo_aluno = $_POST['Check-type-aluno'];
    }

    if (isset($_POST['Check-type-sexo'])){
        $sexo = $_POST['Check-type-sexo'];
    }
    
	$sql = "INSERT INTO aluno (matricula_aluno, email_aluno, telefone_aluno, aniversario_aluno, nome_aluno, cpf_aluno, sexo_aluno, tipo_aluno, situacao) VALUES ('$matricula', '$email', '$telefone', '$nascimento', '$nome', '$cpf', '$sexo', '$tipo_aluno', '$situacao');";

    echo $sql;
    
    $cadastro=mysqli_query($conn, $sql);


	//echo "<br>";
	//echo $sql;

	if ($cadastro) {
		echo "<script> alert('Novo registro criado com sucesso')</script>";
        
	} else {
        echo "não";
		echo "<script>alert('Erro: " . $sql . "<br>" . mysqli_error($conn) . "')</script>";
	}
    
    exit('<script>location.href = "http://localhost/naput/cadastro_aluno.php"</script>');
?>