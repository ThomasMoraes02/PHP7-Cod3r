<div class="titulo">Desafio Sorteio</div>

<?php 

$nomes = ["Elza","Rapunzel","Branca de Neve","Cinderela"];
$index = array_rand($nomes);

?>

<div center><h1><?php echo $nomes[$index] ?></h1></div>

<style>
    [center] {
        display:flex;
        justify-content:center;
    }
</style>

