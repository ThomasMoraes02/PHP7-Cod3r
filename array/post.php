<div class="titulo">$_POST</div>

<form action="#" method="post">
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="sobrenome" placeholder="Sobrenome">
    <button>Enviar</button>
</form>

<style>
    form > * {
        font-size:1.8rem;
    }
</style>

<?php 
echo "<pre>";

print_R($_POST);