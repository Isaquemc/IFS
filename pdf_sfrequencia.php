<?php	

	include("Conexaobd.php");

    if(isset($_POST['TipoT'])){
        $buscar = $_POST['TipoT'];
    }
    if($buscar == null){
        echo "<script> alert('Informe dados validos')</script>";
        exit('<script>location.href = "http://localhost/naput/aluno_frequencia.php"</script>');
    }

	$html = '<table class="tg">';
	$html .= '<tr>';
	$html .= '<th>Nome</th>';
	$html .= '<th>Matrícula</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
	$lista = "SELECT DISTINCT Aluno_matricula_aluno, nome_aluno FROM frequencia, aluno WHERE aluno.matricula_aluno = frequencia.Aluno_matricula_aluno AND Aluno_matricula_aluno not IN (SELECT DISTINCT Aluno_matricula_aluno FROM frequencia WHERE extract(month FROM data_frequencia)='$buscar')";
	$result_user = mysqli_query($conn, $lista);
	while($linha_usuario = mysqli_fetch_assoc($result_user)){
		$html .= '<tr><td>'.$linha_usuario['nome_aluno'] . "</td>";
		$html .= '<td>'.$linha_usuario['Aluno_matricula_aluno'] . "</td></tr>";		
	}
	
	$html .= '</tbody>';
	$html .= '</table';

	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('
			<h1 style="text-align: center;">Alunos sem Frequência Registrada</h1>
			'. $html .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatório_bloqueados.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>