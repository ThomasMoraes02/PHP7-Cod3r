<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="titulo">Excluir Registro #2</div>

<?php 

require_once "conexao.php";

$conexao = novaConexao();

//Verifica se o parâmetro excluir existe
if($_GET['excluir']) {
    //Query de exclusão de registros
    $excluirSQL = "DELETE FROM cadastro WHERE id = ?";

    //Preaparando a query de exlusão para efetuar
    $stmt = $conexao->prepare($excluirSQL);

    //Definindo que o parâmetro deve ser do tipo inteiro e estar associado a a chave "excluir"
    $stmt->bind_param("i", $_GET['excluir']);

    //Executando consulta
    $stmt->execute();
} 

$registros = [];

$sql = "SELECT * FROM cadastro";

$resultado = $conexao->query($sql);

if($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {
        $registros[] = $row; 
    }
} elseif($conexao->error) {
    echo "Erro: " . $conexao->error;
}

?>

<table class="table table-hover table-striped table-bordered">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Nascimento</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro): ?>
            <tr>
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['nome'] ?></td>
                <td><?= $registro['email'] ?></td>
                <td><?= date("d/m/Y", strtotime($registro['nascimento'])) ?></td>
                <td><a href="http://localhost/Cod3r/curso-php/exercicio.php?dir=db&file=excluir_2&excluir=<?= $registro['id']?>" class="btn btn-danger">Excluir</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>


<style>
    table>* {
        font-size:1.2rem;
    }
</style>