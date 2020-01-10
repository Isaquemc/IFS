<?php	

	include("Conexaobd.php");
    
    if(isset($_POST['Buscar'])){
        $buscar = $_POST['Buscar'];
    }
    if($buscar == null){
        echo "<script> alert('Informe dados validos')</script>";
        exit('<script>location.href = "http://localhost/naput/aluno_treinamento.php"</script>');
    }

    $lista = "SELECT aluno.nome_aluno, exercicios.cod_exercicio, exercicios.series_repeticoes, exercicios.carga_tempo, exercicios.observacoes, exercicios.treino_tipo, exercicios.Treinamento_cod_treinamento, tipo_exercicio.descricao FROM exercicios, aluno, treinamento, tipo_exercicio WHERE exercicios.Treinamento_cod_treinamento=treinamento.cod_treinamento and aluno.matricula_aluno=treinamento.Aluno_matricula_aluno and tipo_exercicio.tipo_exercicio=exercicios.Tipo_exercicio_tipo_exercicio and treinamento.Aluno_matricula_aluno = '$buscar'";

	$result_user = mysqli_query($conn, $lista);
	while($linha_usuario = mysqli_fetch_assoc($result_user)){


		if($linha_usuario['treino_tipo'] == "a"){
            $tipo = implode('Membros Superiores', array_reverse(explode('a', $linha_usuario['treino_tipo'])));
        }else

        if($linha_usuario['treino_tipo'] == "b"){
            $tipo = implode('Membros Inferiores', array_reverse(explode('b', $linha_usuario['treino_tipo'])));
        }
        
	$html = '<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:bold;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
.tg .tg-0lax{text-align:left;vertical-align:top}
table{
width: 100%;
}
</style>

<center><h3>Ficha de Treinamento</h3></center>

<table class="tg">
  <tr>
    <th class="tg-0pky">Nome do Aluno</th>
    <td class="tg-0pky">'.$linha_usuario['nome_aluno'].'</td>
    <th class="tg-0pky">ID</th>
    <td class="tg-0pky">'.$linha_usuario['cod_exercicio'] .'</td>
    <th class="tg-0pky">Código do Treinamento</th>
    <td class="tg-0pky">'.$linha_usuario['Treinamento_cod_treinamento'] .'</td>
    <th class="tg-0pky">Tipo do Exercício</th>
    <td class="tg-0pky">'.$linha_usuario['descricao'].'</td>
  </tr>
  <tr>
    <th class="tg-0pky">Series/Repetições</th>
    <td class="tg-0pky">'.$linha_usuario['series_repeticoes'] .'</td>
    <th class="tg-0lax">Carga e/ou Tempo</th>
    <td class="tg-0lax">'.$linha_usuario['carga_tempo'] .'</td>
    <th class="tg-0lax">Observações</th>
    <td class="tg-0lax">'.$linha_usuario['observacoes'] .'</td>
    <th class="tg-0lax">Tipo do exercício</th>
    <td class="tg-0lax">'.$tipo.'</td>
  </tr>
</table>';

    }


    //referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html($html);

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"ficha_treinamento.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);

?>