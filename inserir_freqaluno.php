<?php
include("Conexaobd.php");

$matricula = $_POST['Matricula'];
date_default_timezone_set("America/Maceio");
$data = date('Y-m-d');
$hora = date('H:i:s');

$sql = "INSERT INTO frequencia (cod_frequencia, Aluno_matricula_aluno, hora_frequencia, data_frequencia) VALUES ('', '$matricula', '$hora', '$data');";
    
    $cadastro=mysqli_query($conn, $sql);


	//echo "<br>";
	//echo $sql;

	if ($cadastro) {
		echo "<script> alert('Novo registro criado com sucesso')</script>";
        
	} else {
        echo "não";
		echo "<script>alert('Erro: " . $sql . "<br>" . mysqli_error($conn) . "')</script>";
	}
    
    exit('<script>location.href = "http://localhost/naput/registrar_freq_aluno.php"</script>');
?>