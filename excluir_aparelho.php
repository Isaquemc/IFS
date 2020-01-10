<?php
	include("Conexaobd.php");

    $id = $_POST["Excluir"];
    
	$sql = "DELETE FROM tipo_exercicio WHERE tipo_exercicio = '$id';";
    
    $excluir=mysqli_query($conn, $sql);


	//echo "<br>";
	//echo $sql;

	if ($excluir) {
		echo "<script> alert('Exclusão registrada com sucesso')</script>";
        
	} else {
        echo "não";
		echo "<script>alert('Erro: " . $sql . "<br>" . mysqli_error($conn) . "')</script>";
	}
    
    exit('<script>location.href = "http://localhost/naput/consulta_aparelhos.php"</script>');
?>