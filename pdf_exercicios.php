<?php	

	include("Conexaobd.php");
	$html = '<table class="table table-bordered">';
	$html .= '<thead class="thead-dark">';
	$html .= '<tr>';
	$html .= '<th scope="row">ID</th>';
	$html .= '<th scope="row">Descrição</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
	$lista = "SELECT * FROM tipo_exercicio";
	$result_user = mysqli_query($conn, $lista);
	while($linha_usuario = mysqli_fetch_assoc($result_user)){
		$html .= '<tr><td>'.$linha_usuario['tipo_exercicio'] . "</td>";
		$html .= '<td>'.$linha_usuario['descricao'] . "</td></tr>";		
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
			<h1 style="text-align: center;">Aparellhos Disponíveis</h1>
			'. $html .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatório_aparelhos.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>