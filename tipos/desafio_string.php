<div class="titulo">Desafio String</div>

<?php 

// !AbcaBcabc 

echo "!AbcaBcabc";

echo "<br>";

echo strpos("!AbcaBcabc", "abc") . "<br>";

echo stripos("!AbcaBcabc", "abc") . "<br>";

echo strpos(strtolower("!AbcaBcabc"), "abc");
