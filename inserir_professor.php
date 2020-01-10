<?php
	include("Conexaobd.php");

	$nome = $_POST['Nome'];
    $email = $_POST['Email'];
    $cpf = $_POST['CPF'];
    $matricula = $_POST['Matricula'];
    $telefone = $_POST['Telefone'];
    $nasc = $_POST['Data'];
    $nascimento = implode('-', array_reverse(explode('/', $nasc)));

    $senha = $_POST['Senha'];

    if($senha < 4 || $senha > 20){
        echo "<script> alert('Informe uma senha válida!')</script>";
        exit('<script>location.href = "http://localhost/naput/cadastro_professor.php"</script>');
    }
    
    if (isset($_POST['Check-type-sexo'])){
        $sexo = $_POST['Check-type-sexo'];
    }
    
	$sql = "INSERT INTO professor (matricula_prof, nome_prof, telefone_prof, email_prof, aniversario_prof, cpf_prof, sexo_prof, senha) VALUES ('$matricula', '$nome', '$telefone', '$email', '$nascimento', '$cpf', '$sexo', '$senha');";
    
    $cadastro=mysqli_query($conn, $sql);

	//echo "<br>";
	//echo $sql;

	if ($cadastro) {
		echo "<script> alert('Novo registro criado com sucesso')</script>";
        
	} else {
        echo "não";
		echo "<script>alert('Erro: " . $sql . "<br>" . mysqli_error($conn) . "')</script>";
	}
    
    exit('<script>location.href = "http://localhost/naput/cadastro_professor.php"</script>');
?>