<div class="titulo">Desafio Tabela 2</div>

<form action="#" method="POST">
    <label>Linhas:</label>
    <input type="number" value="<?= $_POST['linhas'] ?? 10 ?>" name="linhas" placeholder="Digite o número de linhas">
    <label>Colunas:</label>
    <input type="number" value="<?= $_POST['colunas'] ?? 10 ?>" name="colunas" placeholder="Digite o número de colunas">
    <button type="submit">Gerar Tabela</button>
</form>


<table>
    <?php 
        if($_POST == TRUE) {
            $linhas = intval($_POST['linhas']) ?? 10;
            $colunas = intval($_POST['colunas']) ?? 10;

            if(!$linhas) $linhas = 10;
            if(!$colunas) $colunas = 10;

            $num = 1;
            for($i = 0; $i < $linhas; $i++) {
                echo "<tr>";
                for($j = 0; $j <$colunas; $j++) {
                    echo "<td>$num</td>";
                    $num++;
                }
                echo "</tr>";
            }
        } else {
            echo "";
        }
    ?>
</table>


<style>
table {
    border: 1px solid #444;
    border-collapse: collapse;
    margin: 20px 0px;
}

table tr {
    border: 1px solid #444;
}

table td {
    padding: 10px 20px;
}

form>* {
    font-size: 1.8rem;
}
</style>