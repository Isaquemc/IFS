<?php	

	include("Conexaobd.php");

	if(isset($_POST['Buscar'])){
        $buscar = $_POST['Buscar'];
    }
    if($buscar == null){
        echo "<script> alert('Informe dados validos')</script>";
        exit('<script>location.href = "http://localhost/naput/aluno_validade.php"</script>');
    }


	$html = '<table class="table table-bordered">';
	$html .= '<thead class="thead-dark">';
	$html .= '<tr>';
	$html .= '<th scope="row">ID</th>';
	$html .= '<th scope="row">Professor</th>';
	$html .= '<th scope="row">Aluno</th>';
	$html .= '<th scope="row">Inicio</th>';
	$html .= '<th scope="row">Fim</th>';
	$html .= '<th scope="row">Tipo</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
	$lista = "SELECT * FROM treinamento WHERE Aluno_matricula_aluno = '$buscar'";
	$result_user = mysqli_query($conn, $lista);
	while($linha_usuario = mysqli_fetch_assoc($result_user)){

				$it = implode('/', array_reverse(explode('-', $linha_usuario['inicio_treinamento'])));

                $if = implode('/', array_reverse(explode('-', $linha_usuario['fim_treinamento'])));

                if($linha_usuario['ultimo_treino_tipo'] == "a"){
                    $tipo = implode('Membros Superiores', array_reverse(explode('a', $linha_usuario['ultimo_treino_tipo'])));
                }else

                if($linha_usuario['ultimo_treino_tipo'] == "b"){
                    $tipo = implode('Membros Inferiores', array_reverse(explode('b', $linha_usuario['ultimo_treino_tipo'])));
                }


		$html .= '<tr><td>'.$linha_usuario['cod_treinamento'] . "</td>";
		$html .= '<td>'.$linha_usuario['Professor_matricula_prof'] . "</td>";
		$html .= '<td>'.$linha_usuario['Aluno_matricula_aluno'] . "</td>";
		$html .= '<td>'.$it . "</td>";
		$html .= '<td>'.$if . "</td>";
		$html .= '<td>'.$tipo . "</td>";		
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
			<h1 style="text-align: center;">Validade da Ficha</h1>
			'. $html .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"Validade_treinamento.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>