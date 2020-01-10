<?php
	include("Conexaobd.php");

    $matriculaP = $_POST['MatriculaP'];
    $matriculaA = $_POST['MatriculaA'];
    $inicioT = $_POST['inicioTreinamento'];
    $fimT = $_POST['fimTreinamento'];
    
    $IT = implode('-', array_reverse(explode('/', $inicioT)));
    $FT = implode('-', array_reverse(explode('/', $fimT)));
    
    if (isset($_POST['TipoT'])){
        $tipoT = $_POST['TipoT'];
        if($tipoT == "Superior"){
            $tipo = implode('a', (explode('Superior', $tipoT)));
        }
        
        if($tipoT == "Inferior"){
            $tipo = implode('b', (explode('Inferior', $tipoT)));
        }
    }   

	$sql = "INSERT INTO treinamento (Professor_matricula_prof, Aluno_matricula_aluno, inicio_treinamento, fim_treinamento, ultimo_treino_tipo) VALUES ('$matriculaP', '$matriculaA', '$IT', '$FT', '$tipo');";
    
    $cadastro=mysqli_query($conn, $sql);

	if ($cadastro) {
		echo "<script> alert('Novo registro criado com sucesso')</script>";
        
	} else {
        echo "não";
		echo "<script>alert('Erro: " . $sql . "<br>" . mysqli_error($conn) . "')</script>";
	}
    
    exit('<script>location.href = "http://localhost/naput/cadastro_treinamento.php"</script>');
?>