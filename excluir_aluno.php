<?php
	include("Conexaobd.php");

    $matricula = $_POST["Excluir"];
    
	$sql = "DELETE FROM aluno WHERE matricula_aluno = '$matricula'";
    
    $excluir=mysqli_query($conn, $sql);

    echo $excluir;


	if ($excluir) {
		echo "<script> alert('Exclusão registrada com sucesso')</script>";
        
	} else {
        echo "não";
		echo "<script>alert('Erro: " . $sql . "<br>" . mysqli_error($conn) . "')</script>";
	}
    
    exit('<script>location.href = "http://localhost/naput/consulta.php"</script>');
?>