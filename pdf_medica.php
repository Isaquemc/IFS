<?php	

	include("Conexaobd.php");
    
    if(isset($_POST['Buscar'])){
        $buscar = $_POST['Buscar'];
    }
    if($buscar == null){
        echo "<script> alert('Informe dados validos')</script>";
        exit('<script>location.href = "http://localhost/naput/aluno_treinamento.php"</script>');
    }

    $lista = "SELECT * FROM avaliacao WHERE Aluno_matricula_aluno LIKE '%$buscar%' ORDER BY Aluno_matricula_aluno DESC";
    
	$result_user = mysqli_query($conn, $lista);
	while($linha_usuario = mysqli_fetch_assoc($result_user)){

		$avaliacao = implode('/', array_reverse(explode('-', $linha_usuario['data_avaliacao'])));

		if($linha_usuario['cardiopatias'] == "n"){
        	$cardio = implode('Não', array_reverse(explode('n', $linha_usuario['cardiopatias'])));
        }else
        if($linha_usuario['cardiopatias'] == "s"){
        	$cardio = implode('Sim', array_reverse(explode('s', $linha_usuario['cardiopatias'])));
        }

        if($linha_usuario['cardio_familia'] == "n"){
        	$cardiof = implode('Não', array_reverse(explode('n', $linha_usuario['cardio_familia'])));
        }else
        if($linha_usuario['cardio_familia'] == "s"){
        	$cardiof = implode('Sim', array_reverse(explode('s', $linha_usuario['cardio_familia'])));
        }

        if($linha_usuario['diabete'] == "n"){
        	$diabete = implode('Não', array_reverse(explode('n', $linha_usuario['diabete'])));
        }else
        if($linha_usuario['diabete'] == "s"){
        	$diabete = implode('Sim', array_reverse(explode('s', $linha_usuario['diabete'])));
        }

        if($linha_usuario['diab_familia'] == "n"){
        	$diabetef = implode('Não', array_reverse(explode('n', $linha_usuario['diab_familia'])));
        }else
        if($linha_usuario['diab_familia'] == "s"){
        	$diabetef = implode('Sim', array_reverse(explode('s', $linha_usuario['diab_familia'])));
        }

        if($linha_usuario['press_arterial'] == "n"){
        	$press = implode('Não', array_reverse(explode('n', $linha_usuario['press_arterial'])));
        }else
        if($linha_usuario['press_arterial'] == "s"){
        	$press = implode('Sim', array_reverse(explode('s', $linha_usuario['press_arterial'])));
        }

         if($linha_usuario['press_familia'] == "n"){
        	$pressf = implode('Não', array_reverse(explode('n', $linha_usuario['press_familia'])));
        }else
        if($linha_usuario['press_familia'] == "s"){
        	$pressf = implode('Sim', array_reverse(explode('s', $linha_usuario['press_familia'])));
        }

    $html = '<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
table{
width: 100%;
}
</style>

<center><h2>Situação Médica<h2></center>
<br>
  <h3>Dados Gerais</h3>
<table class="tg">
  <tr>
    <th class="tg-0pky">ID</th>
    <td class="tg-0pky">'.$linha_usuario['cod_avaliacao'] .'</td>
    <th class="tg-0pky">Matricula do Aluno</th>
    <td class="tg-0pky">'.$linha_usuario['Aluno_matricula_aluno'] .'</td>
    <th class="tg-0pky">Data da Avaliação</th>
    <td class="tg-0pky">'.$avaliacao .'</td>
  </tr>
  <tr>
    <th class="tg-0pky">Condicionamento</th>
    <td class="tg-0pky">'.$linha_usuario['cond_fisica'] .'</td>
    <th class="tg-0pky">Objetivos</th>
    <td class="tg-0pky">'.$linha_usuario['objetivos'] .'</td>
    <th class="tg-0pky">Acidentes</th>
    <td class="tg-0pky">'.$linha_usuario['acidentes'] .'</td>
  </tr>
  <tr>
    <th class="tg-0pky">Cardiopatias</th>
    <td class="tg-0pky">'.$cardio .'</td>
    <th class="tg-0pky">Card. Familiar</th>
    <td class="tg-0pky">'.$cardiof .'</td>
    <th class="tg-0pky">Diabetes</th>
    <td class="tg-0pky">'.$diabete .'</td>
  </tr>
  <tr>
    <th class="tg-0pky">Diab. Familiar</th>
    <td class="tg-0pky">'.$diabetef.'</td>
    <th class="tg-0pky">Pressão Arterial</th>
    <td class="tg-0pky">'.$press .'</td>
    <th class="tg-0pky">Press. Familiar</th>
    <td class="tg-0pky">'.$pressf .'</td>
  </tr>
  <tr>
    <th class="tg-0pky">Qtd. de Refeições</th>
    <td class="tg-0pky">'.$linha_usuario['qnt_refeicoes'] .'</td>
    <th class="tg-0pky">Alergias</th>
    <td class="tg-0pky">'.$linha_usuario['alergias'] .'</td>
    <th class="tg-0pky">Alergias a medicamentos</th>
    <td class="tg-0pky">'.$linha_usuario['med_alergias'] .'</td>
  </tr>
  <tr>
    <th class="tg-0pky">Etilismo</th>
    <td class="tg-0pky">'.$linha_usuario['verif_etilismo'] .'</td>
    <th class="tg-0pky">Tabagismo</th>
    <td class="tg-0pky">'.$linha_usuario['verif_tabagismo'] .'</td>
    <th class="tg-0pky">Composição das refeições</th>
    <td class="tg-0pky">'.$linha_usuario['comp_refeicoes'] .'</td>
  </tr>
</table>

    <br>
  <h3>Membros Superiores</h3>
  
<table class="tg">
  <tr>
    <td class="tg-0pky">Abdomen</td>
    <td class="tg-0pky">'.$linha_usuario['abdomen'] .'</td>
    <td class="tg-0pky">Torax</td>
    <td class="tg-0pky">'.$linha_usuario['torax'] .'</td>
    <td class="tg-0pky">Antebraço Direito</td>
    <td class="tg-0pky">'.$linha_usuario['antebraco_d'] .'</td>
    <td class="tg-0pky">Antebraço Esquerdo</td>
    <td class="tg-0pky">'.$linha_usuario['antebraco_e'] .'</td>
  </tr>
  <tr>
    <td class="tg-0pky">Abdominal</td>
    <td class="tg-0pky">'.$linha_usuario['abdominal'] .'</td>
    <td class="tg-0pky">Peitoral</td>
    <td class="tg-0pky">'.$linha_usuario['peitoral'] .'</td>
    <td class="tg-0pky">Ombros</td>
    <td class="tg-0pky">'.$linha_usuario['ombros'] .'</td>
    <td class="tg-0pky">---</td>
    <td class="tg-0pky">---</td>
  </tr>
</table>

    <br>
  <h3>Membros Inferiores</h3>
  
<table class="tg">
  <tr>
    <td class="tg-0pky">Coxa Direita</td>
    <td class="tg-0pky">'.$linha_usuario['coxa_d'] .'</td>
    <td class="tg-0pky">Coxa Esquerda</td>
    <td class="tg-0pky">'.$linha_usuario['coxa_e'] .'</td>
    <td class="tg-0pky">Perna Direita</td>
    <td class="tg-0pky">'.$linha_usuario['perna_d'] .'</td>
    <td class="tg-0pky">Perna Esquerda</td>
    <td class="tg-0pky">'.$linha_usuario['perna_e'] .'</td>
  </tr>
  <tr>
    <td class="tg-0pky">Pés</td>
    <td class="tg-0pky">'.$linha_usuario['pes'] .'</td>
    <td class="tg-0pky">Joelhos</td>
    <td class="tg-0pky">'.$linha_usuario['joelhos'] .'</td>
    <td class="tg-0pky">Quadril</td>
    <td class="tg-0pky">'.$linha_usuario['quadril'] .'</td>
    <td class="tg-0pky">---</td>
    <td class="tg-0pky">---</td>
  </tr>
</table>

    <br>
  <h3>Outros</h3>
  
<table class="tg">
  <tr>
    <td class="tg-0pky">Tripicital</td>
    <td class="tg-0pky">'.$linha_usuario['tripicital'] .'</td>
    <td class="tg-0pky">Arteria Iliaca</td>
    <td class="tg-0pky">'.$linha_usuario['sup_iliaca'] .'</td>
    <td class="tg-0pky">Artéria Escapular Dorsal</td>
    <td class="tg-0pky">'.$linha_usuario['sup_escap'] .'</td>
    <td class="tg-0pky">Coluna</td>
    <td class="tg-0pky">'.$linha_usuario['coluna'] .'</td>
  </tr>
  <tr>
    <td class="tg-0pky">Peso Total</td>
    <td class="tg-0pky">'.$linha_usuario['peso_total'] .'</td>
    <td class="tg-0pky">Peso Gordo</td>
    <td class="tg-0pky">'.$linha_usuario['peso_gordo'] .'</td>
    <td class="tg-0pky">Peso Margro</td>
    <td class="tg-0pky">'.$linha_usuario['peso_magro'] .'</td>
    <td class="tg-0pky">Peso Gordo em Excesso</td>
    <td class="tg-0pky">'.$linha_usuario['pesogordo_excess'] .'</td>
  </tr>
    <td class="tg-0pky">Flexibilidade</td>
    <td class="tg-0pky">'.$linha_usuario['flexibilidade'] .'</td>
    <td class="tg-0pky">Resistência Muscular</td>
    <td class="tg-0pky">'.$linha_usuario['resist_muscular'] .'</td>
    <td class="tg-0pky">Resistência </td>
    <td class="tg-0pky">'.$linha_usuario['resist_aerobica'] .'</td>
    <td class="tg-0pky">---</td>
    <td class="tg-0pky">---</td>
</table>
';
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
		"situacao_medica.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>