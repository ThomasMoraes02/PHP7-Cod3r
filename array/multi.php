<div class="titulo">Multidimensionais</div>

<?php 

$dados = [
    [
        "nome" => "Roberto",
        "idade" => 26,
        "naturalidade" => "São Paulo"
    ],
    [
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "Bahia"
    ]
];

echo "<pre>";

print_r($dados);

echo "<br>";

echo $dados[0]['idade'];