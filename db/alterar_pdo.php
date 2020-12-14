<div class="titulo">PDO: Alterar</div>

<?php 

require_once "conexao_pdo.php";

$conexao = novaConexao();

$sql = "UPDATE cadastro SET nome = ?, nascimento = ?, email = ?, site = ?, filhos = ?, salario = ? WHERE id = ?";

$stmt = $conexao->prepare($sql);

$resultado = $stmt->execute([
    'Thominhas',
    '1992-12-12',
    'tho.vini7@gmail.com',
    'https://thomas.com',
    '3',
    '15000',
    '14'
]);

if($resultado) {
    echo "Sucesso :)";
} else {
    echo "Erro :(";
}