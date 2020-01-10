<?php
	include("Conexaobd.php");

    $codT = $_POST['CodTreinamento'];
    $tExer = $_POST['TipoExercicio'];
    $series = $_POST['SeriesRep'];
    $carga = $_POST['CargaTempo'];
    $obs = $_POST['Observacoes'];
    
    if (isset($_POST['TipoT'])){
        $tipoT = $_POST['TipoT'];
        if($tipoT == "Superior"){
            $tipo = implode('a', (explode('Superior', $tipoT)));
        }
        
        if($tipoT == "Inferior"){
            $tipo = implode('b', (explode('Inferior', $tipoT)));
        }
    }   

    //$sql = "INSERT INTO `exercicios` (`cod_exercicio`, `Treinamento_cod_treinamento`, `Tipo_exercicio_tipo_exercicio`, `series_repeticoes`, `carga_tempo`, `observacoes`, `treino_tipo`) VALUES ('1', '2', '32', '32', '1sffas', 'b');";

	$sql = "INSERT INTO exercicios (Treinamento_cod_treinamento, Tipo_exercicio_tipo_exercicio, series_repeticoes, carga_tempo, observacoes, treino_tipo) VALUES ($codT, $tExer, '$series', '$carga', '$obs', '$tipo');";

    echo $sql;
    
    $cadastro=mysqli_query($conn, $sql);

	if ($cadastro) {
		echo "<script> alert('Novo registro criado com sucesso')</script>";
        
	} else {
        echo "não";
		echo "<script>alert('Erro: " . $sql . "<br>" . mysqli_error($conn) . "')</script>";
	}
    
    exit('<script>location.href = "http://localhost/naput/cadastro_exercicios.php"</script>');
?>