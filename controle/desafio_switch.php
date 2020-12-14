<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metro > Km</option>
        <option value="km-metro">Km > Metro</option>
        <option value="cel-fr">Celsius > fahrenheit</option>
        <option value="fr-cel">fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size:1.8rem;
    }
</style>

<br>

<?php 

$conversao = $_POST['conversao'];
$param = $_POST['param'];

if($param == NULL) {
    $param = 0;
}


switch($conversao) {
    case "km-milha":
        $param /= 1.609;
    break;

    case "milha-km":
        $param *= 1.609;
    break;

    case "metro-km":
        $param /= 1000;
    break;

    case "km-metro":
        $param *= 1000;
    break;

    case "cel-fr":
        $param = ($param * 1.8) + 32;
    break;

    case "fr-cel":
        $param = ($param - 32) / 1.8;
    break; 

    default:
        $param = "Nenhum valor calculado";
break;
}

echo $param;