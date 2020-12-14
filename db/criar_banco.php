<div class="titulo">Criar Banco</div>

<?php 

require_once "conexao.php";

$conexao = novaConexao(NULL);

//Armazenando a consulta dentro de uma variável
$sql = "CREATE DATABASE IF NOT EXISTS curso_php";

//Efetuando a consulta através de query()
$resultado = $conexao->query($sql);

if($resultado) {
    echo "Sucesso :)";
} else {
    echo "Erro: " . $conexao->error;
}

//Fechando a conexão
$conexao->close();