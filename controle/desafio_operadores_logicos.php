<div class="titulo">Desafio Operadores Lógicos</div>

<!-- 

Dois trabalhos : terça e quinta
Se os dois forem executados: TV 50' e Sorvete
Se apenas um: Tv 21' e Sorvete
Se nenhum for executado: fica em casa

-->

<form action="#" method=post>
    <div>
        <label for="t1">Trabalho 1 (terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
button,
select {
    font-size:1.2rem;
}
</style>

<?php 

$trabalho1 = $_POST['t1'];
$trabalho2 = $_POST['t2'];

if($trabalho1 == "1" && $trabalho2 == "1") {
    echo "Pode comprar uma TV de 50' e comer sorvete";
} else if($trabalho1 == 1 || $trabalho2 == "1") {
    echo "Pode comprar uma TV de 32' e comer sorvete";
} else {
    echo "Fica em casa";
}

?>