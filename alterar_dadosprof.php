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

    if (isset($_POST['Check-type-sexo'])){
        $sexo = $_POST['Check-type-sexo'];
    }
    
    $sql = "UPDATE professor SET matricula_prof='$matricula', nome_prof='$nome',telefone_prof='$telefone', email_prof='$email', aniversario_prof='$nascimento', cpf_prof='$cpf', sexo_prof='$sexo', senha='$senha' WHERE matricula_prof = '$matricula'";
    
    $cadastro=mysqli_query($conn, $sql);
    
    echo $cadastro;

	//echo "<br>";
	//echo $sql;

	if ($cadastro) {
		echo "<script> alert('Dados alterados com sucesso')</script>";
        
	} else {
        echo "não";
		echo "<script>alert('Erro: " . $sql . "<br>" . mysqli_error($conn) . "')</script>";
	}
    
    exit('<script>location.href = "http://localhost/naput/consulta_prof.php"</script>');

?>