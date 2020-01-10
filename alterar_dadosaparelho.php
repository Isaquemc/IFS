<?php
session_start();

include("Conexaobd.php");

    $id = $_POST['id'];
	$descricao = $_POST['Descricao'];
    
    if(isset($_POST['Foto'])){
        $img = $_POST['Foto'];
    }else{
        $img = "nothing";
    }
    

	$sql = "UPDATE tipo_exercicio SET descricao='$descricao' WHERE tipo_exercicio='$id'";
    
    $cadastro=mysqli_query($conn, $sql);


	if ($cadastro) {
		echo "<script> alert('Dados alterados com sucesso')</script>";
        
	} else {
        echo "não";
		echo "<script>alert('Erro: " . $sql . "<br>" . mysqli_error($conn) . "')</script>";
	}
    
    exit('<script>location.href = "http://localhost/naput/consulta_aparelhos.php"</script>');

?>