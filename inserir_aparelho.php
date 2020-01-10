<?php
	include("Conexaobd.php");

    $descricao = $_POST['Descricao'];
    

	$sql = "INSERT INTO tipo_exercicio (descricao) VALUES ('$descricao');";
    
    $cadastro=mysqli_query($conn, $sql);


	if ($cadastro) {
		echo "<script> alert('Novo registro criado com sucesso')</script>";
        
	} else {
        echo "não";
		echo "<script>alert('Erro: " . $sql . "<br>" . mysqli_error($conn) . "')</script>";
	}
    
    exit('<script>location.href = "http://localhost/naput/cadastro_aparelho.php"</script>');
?>