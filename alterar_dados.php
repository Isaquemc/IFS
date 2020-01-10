<?php
include("Conexaobd.php");

	$nome = $_POST['Nome'];
    $email = $_POST['Email'];
    $cpf = $_POST['CPF'];
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
    
    $sql = "UPDATE aluno SET matricula_aluno='$matricula', email_aluno='$email', telefone_aluno='$telefone', aniversario_aluno='$nascimento', nome_aluno='$nome', cpf_aluno='$cpf', sexo_aluno='$sexo', tipo_aluno='$tipo_aluno', situacao='$situacao' WHERE matricula_aluno = '$matricula'";
    
    $cadastro=mysqli_query($conn, $sql);


	//echo "<br>";
	//echo $sql;

	if ($cadastro) {
		echo "<script> alert('Dados alterados com sucesso')</script>";
        
	} else {
        echo "não";
		echo "<script>alert('Erro: " . $sql . "<br>" . mysqli_error($conn) . "')</script>";
	}
    
    exit('<script>location.href = "http://localhost/naput/consulta.php"</script>');

?>