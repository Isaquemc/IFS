<?php	

	include("Conexaobd.php");
    
    $tipo = $_POST['TipoT'];

    if($tipo == '1'){
        $mes = "Janeiro";
    }else
    if($tipo == '2'){
        $mes = "Fevereiro";
    }else
    if($tipo == '3'){
        $mes = "Março";
    }else
    if($tipo == '4'){
        $mes = "Abril";
    }else
    if($tipo == '5'){
        $mes = "Maio";
    }else
    if($tipo == '6'){
        $mes = "Junho";
    }else
    if($tipo == '7'){
        $mes = "Julho";
    }else
    if($tipo == '8'){
        $mes = "Agosto";
    }else
    if($tipo == '9'){
        $mes = "Setembro";
    }else
    if($tipo == '10'){
        $mes = "Outubro";
    }else
    if($tipo == '11'){
        $mes = "Novembro";
    }else
    if($tipo == '12'){
        $mes = "Dezembro";
    }
    
    $html = '
			<div class="input-group mb-3">
				<img src="img/logoifs.png" style="width: 6rem;">
				<h1 style="text-align: center;">Aniversariantes '.$mes.'</h1>
			</div>
			';
	$html .= '<table class="table table-bordered">';
	$html .= '<thead class="thead-dark">';
	$html .= '<tr>';
	$html .= '<th scope="row">Nome</th>';
	$html .= '<th scope="row">Nascimento</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
	$lista = "SELECT nome_aluno, aniversario_aluno FROM aluno WHERE extract(month from aniversario_aluno) = '$tipo' ORDER BY aniversario_aluno";
	$result_user = mysqli_query($conn, $lista);
	while($linha_usuario = mysqli_fetch_assoc($result_user)){
        
        $nascimento = implode('/', array_reverse(explode('-', $linha_usuario['aniversario_aluno'])));
        
		$html .= '<tr><td>'.$linha_usuario['nome_aluno'] . "</td>";
		$html .= '<td>'.$nascimento . "</td>";		
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
	$dompdf->load_html($html);

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_aniversariantes.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>