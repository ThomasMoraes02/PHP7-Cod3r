<div class="titulo">Try Catch</div>

<?php 

//echo 7 / 0; // Gera um erro
//echo indiv(7,0); // Gera um erro

try {
    echo intdiv(7,0);
} catch(Error $e) {
    echo "Teve um erro aqui 1 <br>";
} catch(Exception $e) {
    echo "Teve um erro aqui 2 <br>";
}

try {
    throw new Exeception("Um erro muito estranho aconteceu");
    echo intdiv(7, 0);
} catch(DivisionByZeroError $e) {
    echo "Divisão por zero";
} catch(Throwable $e) {
    echo "Erro encontrado" . $e->getMessage() . "<br>";
} finally {
    echo "Sempre executado";
}