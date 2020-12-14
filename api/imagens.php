<div class="titulo">Imagens</div>

<?php 
$arquivos = NULL;

if($_FILES) {
//$arquivos = $_SESSION['arquivos'] ?? [];

$pastaUpload = __DIR__ . "/../files/";

$nomeArquivo = $_FILES['arquivo']['name'];

$arquivo = $pastaUpload . $nomeArquivo;

$tmp = $_FILES['arquivo']['tmp_name'];

if(move_uploaded_file($tmp, $arquivo)) {
    echo "<br><br>Arquivo válido e enviado com sucesso";
    $arquivos[] = $nomeArquivo;
    $_SESSION['arquivos'] = $nomeArquivo;
} else {
    echo "<br><br>Erro no upload de arquivos";
}
}



?>

<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <button>Enviar</button>
</form>

<ul>
    <?php if($arquivos == TRUE && strpos($arquivo, ".png") > 0): ?>
    <?php foreach($arquivos as $arquivo): ?>
    <li>
        <img src="../../Cod3r/curso-php/files/<?php echo $arquivo ?>" alt="<?php echo $arquivo ?>" height="120">
    </li>
    <?php endforeach ?>
    <?php endif ?>
</ul>

<style>
input,
button {
    font-size: 1.2rem;
}
</style>