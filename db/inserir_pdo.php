<div class="titulo">PDO: Inserir</div>

<?php 

require_once "conexao_pdo.php";

$sql = "INSERT INTO cadastro (nome, email, nascimento, site, filhos, salario) 
VALUES (
    'Joice Motta', 
    'joice@gmail.com', 
    '2002-1-18', 
    'http://joiceMota', 
    3, 
    5000
)";

$conexao = novaConexao();

if($conexao->exec($sql)) {
    $id = $conexao->lastInsertId();
    echo "Novo cadastro com id: $id";
} else {
    echo $conexao->errorCode() . "<br>";
    print_r($conexao->errorInfo());
}
