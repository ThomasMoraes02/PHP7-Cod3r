<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="titulo">Inserir Registro #2</div>


<?php 

if(count($_POST) > 0) {

    $dados = $_POST;

    $erros = [];

    //Valida Nome
    // isset($_POST['nome'])
    if(trim($dados["nome"]) === "") {
        $erros['nome']  = "Nome obrigatório!";
    }

    //Valida Data
    if(isset($dados["nascimento"])) {
        $data = DateTime::createFromFormat("d/m/Y" , $dados['nascimento']);
        if(!$data) {
            $erros['nascimento'] = "Data deve estar no padrão dd/mm/aaaa";
        }
    }

    //Valida Email
    if(!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
        $erros['email'] = "E-mail inválido";
    }

    //Valida site
    if(!filter_var($dados['site'], FILTER_VALIDATE_URL)) {
        $erros['site'] = "Site inválido";
    }

    //Valida inteiro
    $filhosConfig = [
        "options" => ["min_range" => 0, "max_range" => 20]
    ];

    if(!filter_var($dados['filhos'], FILTER_VALIDATE_INT, $filhosConfig) && $dados['filhos'] != 0 ) {
        $erros['filhos'] = "Quantidade de filhos inválida";
    }

    //Valida salário
    $salarioConfig = [
        'options' => ["decimal" => ","]
    ];

    if(!filter_var($dados['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)) {
        $erros['salario'] = "Salário inválido";
    }

    if(count($erros) === 0) {
        require_once "conexao.php";

        $sql = "INSERT INTO cadastro (nome, nascimento, email, site, filhos, salario) 
        VALUES (?, ?, ?, ?, ?, ?)";

        $conexao = novaConexao();
        $stmt = $conexao->prepare($sql);
        
        $params = [
            $dados["nome"],
            $data ? $data->format("Y-m-d") : NULL, 
            $dados["email"], 
            $dados["site"], 
            $dados["filhos"], 
            $dados["salario"], 
        ];

        $stmt->bind_param("ssssid", ...$params);

        if($stmt->execute()) {
            unset($dados);
        }
    }
}
?>


<form action="#" method="post">
    <div class="form-row">

        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input id="nome" class="form-control  <?= $erros['nome'] ? "is-invalid" : "" ?>" type="text" name="nome" placeholder="Nome"
                value="<?= $dados['nome'] ?>">
                <div class="invalid-feedback"><?= $erros['nome'] ?></div>
        </div>

        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input id="nascimento" class="form-control <?= $erros['nascimento'] ? "is-invalid" : "" ?>" type="text" name="nascimento" placeholder="Data de nascimento" value="<?= $dados['nascimento'] ?>">
            <div class="invalid-feedback"><?= $erros['nascimento'] ?></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input id="email" class="form-control <?= $erros['email'] ? "is-invalid" : "" ?>" type="email" name="email" placeholder="E-mail"
                value="<?= $dados['email'] ?>">
                <div class="invalid-feedback"><?= $erros['email'] ?></div>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input id="site" class="form-control <?= $erros['site'] ? "is-invalid" : "" ?>" type="text" name="site" placeholder="Site"
                value="<?= $dados['site'] ?>">
                <div class="invalid-feedback"><?= $erros['site'] ?></div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Quantidade de filhos</label>
            <input id="filhos" class="form-control <?= $erros['filhos'] ? "is-invalid" : "" ?>" type="number" name="filhos" placeholder="Quantidade de filhos"
                value="<?= $dados['filhos'] ?>">
                <div class="invalid-feedback"><?= $erros['filhos'] ?></div>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input id="salario" class="form-control <?= $erros['salario'] ? "is-invalid" : "" ?>" type="text" name="salario" placeholder="Salário"
                value="<?= $dados['salario'] ?>">
                <div class="invalid-feedback"><?= $erros['salario'] ?></div>
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Enviar</button>
</form>