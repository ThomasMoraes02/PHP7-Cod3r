<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Formulário</div>

<h2>Cadastro</h2>

<?php 



if(count($_POST) > 0) {
    $erros = [];


    //Valida Nome
    // isset($_POST['nome'])
    if(!filter_input(INPUT_POST, "nome")) {
        $erros['nome']  = "Nome obrigatório!";
    }

    //Valida Data
    if(filter_input(INPUT_POST, "nascimento")) {
        $data = DateTime::createFromFormat("d/m/Y" , $_POST['nascimento']);
        if(!$data) {
            $erros['nascimento'] = "Data deve estar no padrão dd/mm/aaaa";
        }
    }

    //Valida Email
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $erros['email'] = "E-mail inválido";
    }

    //Valida site
    if(!filter_var($_POST['site'], FILTER_VALIDATE_URL)) {
        $erros['site'] = "Site inválido";
    }

    //Valida inteiro
    $filhosConfig = [
        "options" => ["min_range" => 0, "max_range" => 20]
    ];

    if(!filter_var($_POST['filhos'], FILTER_VALIDATE_INT, $filhosConfig) && $_POST['filhos'] != 0 ) {
        $erros['filhos'] = "Quantidade de filhos inválida";
    }

    //Valida salário
    $salarioConfig = [
        'options' => ["decimal" => ","]
    ];

    if(!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)) {
        $erros['salario'] = "Salário inválido";
    }
}
?>

<!-- Habilitar erros -->
<?php //foreach($erros as $erro) : ?>
<!-- <div class="alert alert-danger" role="alert">
    <?php //echo $erro; ?>
</div> -->
<?php //endforeach ?>

<form action="#" method="post">
    <div class="form-row">

        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input id="nome" class="form-control  <?= $erros['nome'] ? "is-invalid" : "" ?>" type="text" name="nome" placeholder="Nome"
                value="<?= $_POST['nome'] ?>">
                <div class="invalid-feedback"><?= $erros['nome'] ?></div>
        </div>

        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input id="nascimento" class="form-control <?= $erros['nascimento'] ? "is-invalid" : "" ?>" type="text" name="nascimento" placeholder="Data de nascimento" value="<?= $_POST['nascimento'] ?>">
            <div class="invalid-feedback"><?= $erros['nascimento'] ?></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input id="email" class="form-control <?= $erros['email'] ? "is-invalid" : "" ?>" type="email" name="email" placeholder="E-mail"
                value="<?= $_POST['email'] ?>">
                <div class="invalid-feedback"><?= $erros['email'] ?></div>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input id="site" class="form-control <?= $erros['site'] ? "is-invalid" : "" ?>" type="text" name="site" placeholder="Site"
                value="<?= $_POST['site'] ?>">
                <div class="invalid-feedback"><?= $erros['site'] ?></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Quantidade de filhos</label>
            <input id="filhos" class="form-control <?= $erros['filhos'] ? "is-invalid" : "" ?>" type="number" name="filhos" placeholder="Quantidade de filhos"
                value="<?= $_POST['filhos'] ?>">
                <div class="invalid-feedback"><?= $erros['filhos'] ?></div>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input id="salario" class="form-control <?= $erros['salario'] ? "is-invalid" : "" ?>" type="text" name="salario" placeholder="Salário"
                value="<?= $_POST['salario'] ?>">
                <div class="invalid-feedback"><?= $erros['salario'] ?></div>
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Enviar</button>
</form>