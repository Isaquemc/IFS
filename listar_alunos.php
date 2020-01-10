<?php
include_once ("Conexaobd.php");

$op = $_POST['Check-type-search'];
$buscar = $_POST['Buscar'];
//Consulta o bd  
    if($op == 'Matricula'){
        $lista = "SELECT * FROM aluno WHERE matricula_aluno LIKE '%$buscar%' ORDER BY matricula_aluno DESC";
    
    }else 
    if($op == "Nome"){
        $lista = "SELECT * FROM aluno WHERE nome_aluno LIKE '%$buscar%' ORDER BY matricula_aluno DESC";
    }

//Consulta o bd
//$lista = "SELECT * FROM aluno WHERE matricula_aluno LIKE '%$buscar%' ORDER BY matricula_aluno DESC";
$result_user = mysqli_query($conn, $lista);
?>


<table class="table table-bordered">
     <thead class="thead-dark">
        <tr>
            <th scope="row">Nome</th>
            <th scope="row">Email</th>
            <th scope="row">Telefone</th>
            <th scope="row">Data de Nascimento</th>
            <th scope="row">Matrícula</th>
            <th scope="row">CPF</th>
            <th scope="row">Sexo</th>
            <th scope="row">Tipo do Aluno</th>
        </tr>
     </thead>
     <tbody>
<?php
//verifica se encontrou algo na tabela
if(($result_user) and ($result_user->num_rows != 0)){
    while($linha_usuario = mysqli_fetch_assoc($result_user)){
        
        ?>
            <tr>
                <th scope="row"><?php echo $linha_usuario['nome_aluno']. "<br>"; ?></th>
                <td><?php echo $linha_usuario['email_aluno']. "<br>"; ?> </td>
                <td><?php echo $linha_usuario['telefone_aluno']. "<br>"; ?> </td>
                <td><?php echo $linha_usuario['aniversario_aluno']. "<br>"; ?> </td>
                <td><?php echo $linha_usuario['matricula_aluno']. "<br>"; ?> </td>
                <td><?php echo $linha_usuario['cpf_aluno']. "<br>"; ?> </td>
                <td><?php echo $linha_usuario['sexo_aluno']. "<br>"; ?> </td>
                <td><?php echo $linha_usuario['tipo_aluno']. "<br>"; ?> </td>
            </tr>
        <?php
        
    }
}else{
    ?>
    <tr>
        <th scope="row">Nenhum registro encontrado!</th>
    </tr>
    <?php
}
?> 
    </tbody>
</table>

<?php
//exit('<script>location.href = "http://localhost/naput/consulta.php"</script>');
?>