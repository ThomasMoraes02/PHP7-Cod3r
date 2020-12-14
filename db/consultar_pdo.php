<div class="titulo">PDO: Consultar</div>

<?php 

require_once "conexao_pdo.php";

$conexao = novaConexao();

//1) Consulta geral

$sql = "SELECT * FROM cadastro";

//PDO::FETCH_NUM
//PDO::FETCH_ASSOC
//PDO::FETCH_CLASS
//PDO::FETCH_BOTH

$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC); //Fetch = 1 registro - FetchAll = Pega todos

echo "<pre>";
print_r($resultado);
echo "<hr>";



//2) Consulta de paginação

//$sql = "SELECT * FROM cadastro LIMIT ? OFFSET ?";
$sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";
//OFFSET = Ponto de partida (Apartir de "?") - LIMIT = Limite de registros

$stmt = $conexao->prepare($sql);
$stmt->bindValue(':qtde', 2, PDO::PARAM_INT); //Limite de dois registros
$stmt->bindValue(':inicio', 3, PDO::PARAM_INT); //Paginação a partir do terceiro registro

if($stmt->execute()) {
    $resultado = $stmt->fetchAll();
    echo "<pre>";
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

echo "<hr>";

//3) Consulta por id

//Maneira 1
$sql = "SELECT * FROM cadastro WHERE id = ?";
$stmt = $conexao->prepare($sql);
if($stmt->execute([14])) {
    $resultado = $stmt->fetchAll();
    echo "<pre>";
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

echo "<br>";

//Maneira 2
$sql = "SELECT * FROM cadastro WHERE id = :id";
$stmt = $conexao->prepare($sql);
$stmt->bindValue(':id', 14, PDO::PARAM_INT);
if($stmt->execute()) {
    $resultado = $stmt->fetchAll();
    echo "<pre>";
    print_r($resultado);
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}
