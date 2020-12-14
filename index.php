<?php 
//Inicializando a sessãio
session_start();

if($_COOKIE['usuario']) {
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}


//Verificando se usuário está setado. Caso não esteja será redirecionado para a tela de login
if(!$_SESSION['usuario']) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Curso PHP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>

    <nav class="navegacao">
        <span class="usuario">Usuário: <?php echo $_SESSION['usuario']; ?></span>
        <a href="logout.php">Sair</a>
    </nav>

    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>1. Básico</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
                        <li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
                        <li><a href="exercicio.php?dir=basico&file=comentarios">Comentários PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=desafio">Desafio</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>2. Tipos</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=float">Tipo Float</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=aritmeticas">Operações Aritméticas</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_precedencia">Desafio Precedência</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=string">Tipo String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_string">Desafio String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=booleano">Tipo Booleano</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=conversoes">Conversões</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>3. Variáveis</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=variaveis&file=basico">Variável</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafio_equacao">Desafio Equação</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=atribuicao">Atribuições</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">Variáveis Variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafio_variaveis">Desafio Variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=valor_referencia">Valor vs Referência</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=constante">Constantes</a></li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>4. Controle</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=controle&file=if_else">If Else</a></li>
                        <li><a href="exercicio.php?dir=controle&file=operadores_relacionais">Operadores Relacionais</a></li>
                        <li><a href="exercicio.php?dir=controle&file=desafio_pi">Desafio PI</a></li>
                        <li><a href="exercicio.php?dir=controle&file=operadores_logicos">Operadores Lógicos</a></li>
                        <li><a href="exercicio.php?dir=controle&file=desafio_operadores_logicos">Desafio Operadores Lógicos</a></li>
                        <li><a href="exercicio.php?dir=controle&file=operador_ternario">Operador Ternário</a></li>
                        <li><a href="exercicio.php?dir=controle&file=switch">Switch</a></li>
                        <li><a href="exercicio.php?dir=controle&file=desafio_switch">Desafio Switch</a></li>
                    </ul>
                </div>
                <div class="modulo laranja">
                    <h3>5. Array</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=array&file=basico">Array</a></li>
                        <li><a href="exercicio.php?dir=array&file=mapa">Mapa</a></li>
                        <li><a href="exercicio.php?dir=array&file=desafio_index">Desafio</a></li>
                        <li><a href="exercicio.php?dir=array&file=desafio_meses">Desafio Meses</a></li>
                        <li><a href="exercicio.php?dir=array&file=operacoes">Operações</a></li>
                        <li><a href="exercicio.php?dir=array&file=desafio_sorteio">Desafio sorteio</a></li>
                        <li><a href="exercicio.php?dir=array&file=multi">Multidimensionais</a></li>
                        <li><a href="exercicio.php?dir=array&file=constantes">Array Constantes</a></li>
                        <li><a href="exercicio.php?dir=array&file=get">$_GET</a></li>
                        <li><a href="exercicio.php?dir=array&file=post">$_POST</a></li>
                        <li><a href="exercicio.php?dir=array&file=comparacao">Comparação Arrays</a></li>
                    </ul>
                </div>
                <div class="modulo verde-escuro">
                    <h3>6. Repetições</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=repeticoes&file=for">Laço For</a></li>
                        <li><a href="exercicio.php?dir=repeticoes&file=desafio_for">Desafio For</a></li>
                        <li><a href="exercicio.php?dir=repeticoes&file=foreach">Foreach</a></li>
                        <li><a href="exercicio.php?dir=repeticoes&file=break">Break/Continue</a></li>
                        <li><a href="exercicio.php?dir=repeticoes&file=desafio_impressao">Desafio Impressão</a></li>
                        <li><a href="exercicio.php?dir=repeticoes&file=while">While/Do While</a></li>
                        <li><a href="exercicio.php?dir=repeticoes&file=desafio_tabela1">Desafio Tabela 1</a></li>
                        <li><a href="exercicio.php?dir=repeticoes&file=desafio_tabela2">Desafio Tabela 2</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho-escuro">
                    <h3>7. Funções</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=funcoes&file=escopo">Função & Escopo</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=args_retorno">Argumentos & Retorno</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=desafio_palindromo">Desafio Palindromo</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=args_variaveis">Argumentos Variáveis</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=args_padrao">Argumento Padrão</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=usando_tipos">Usando Tipos</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=anonimas">Funções Anônimas</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=closure_callable">Closure & Callable</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=recursividade">Recursividade</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=desafio_recursivo">Desafio Recursivo</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=retornando_funcao">Retornando Função</a></li>
                        <li><a href="exercicio.php?dir=funcoes&file=map_filter">Map & Filter</a></li>
                    </ul>
                </div>
                <div class="modulo azul-escuro">
                    <h3>8. Paradigma O.O</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=classes_objetos&file=classe">Primeira Classe</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=desafio_data">Desafio Data</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=construtor_destrutor">Construtor & Destrutor</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=heranca">Herança</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=visibilidade">Visibilidade</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=static">Membros Estáticos</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=interface">Interface</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=abstract">Classe Abstrata</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=desafio_erros">Desafio Erros</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=final">Modificador Final</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=trait_01">Traits#01</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=trait_02">Traits#02</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=metodos_magicos">Métodos Mágicos</a></li>
                        <li><a href="exercicio.php?dir=classes_objetos&file=polimorfismo">Polimorfismo</a></li>
                    </ul>
                </div>
                <div class="modulo roxo-escuro">
                    <h3>9. Include</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=includes&file=include">Includes</a></li>
                        <li><a href="exercicio.php?dir=includes&file=include_funcao">Include Função</a></li>
                        <li><a href="exercicio.php?dir=includes&file=include_require">Include Vs Require</a></li>
                        <li><a href="exercicio.php?dir=includes&file=require_return">Require & Return</a></li>
                        <li><a href="exercicio.php?dir=includes&file=include_once">Include Once</a></li>
                        <li><a href="exercicio.php?dir=includes&file=desafio_include">Desafio Include</a></li>
                    </ul>
                </div>
                <div class="modulo laranja-escuro">
                    <h3>10. Namespace</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=namespace&file=basico">Exemplo Básico</a></li>
                        <li><a href="exercicio.php?dir=namespace&file=sub_namespaces">Sub-Namespaces</a></li>
                        <li><a href="exercicio.php?dir=namespace&file=use_as">Use/As</a></li>
                    </ul>
                </div>
                <div class="modulo verde">
                    <h3>11. Tratamento de erro</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tratamento_erro&file=try_catch">Try Catch</a></li>
                        <li><a href="exercicio.php?dir=tratamento_erro&file=erros_personalizados">Erros Personalizados</a></li>
                        <li><a href="exercicio.php?dir=tratamento_erro&file=desafio_intdiv_teste">Desafio IntDiv</a></li>
                        <li><a href="exercicio.php?dir=tratamento_erro&file=gerenciador_erro">Error Handler</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>12. Sessão & Cookie</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=sessao&file=basico_sessao">Sessão</a></li>
                        <li><a href="exercicio.php?dir=sessao&file=gerenciando_sessao">Gerenciando Sessão</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>13. API</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=api&file=datas_01">Datas #01</a></li>
                        <li><a href="exercicio.php?dir=api&file=datas_02">Datas #02</a></li>
                        <li><a href="exercicio.php?dir=api&file=escrever_arquivo">Escrever Arquivo</a></li>
                        <li><a href="exercicio.php?dir=api&file=ler_arquivo">Ler Arquivo</a></li>
                        <li><a href="exercicio.php?dir=api&file=upload">Upload</a></li>
                        <li><a href="exercicio.php?dir=api&file=download">Download</a></li>
                        <li><a href="exercicio.php?dir=api&file=imagens">Imagens</a></li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>14. Formulários</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=formulario&file=formulario">Formulário</a></li>
                    </ul>
                </div>
                <div class="modulo laranja">
                    <h3>15. Banco de Dados</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=db&file=criar_banco">Criar Banco</a></li>
                        <li><a href="exercicio.php?dir=db&file=criar_tabela">Criar Tabela</a></li>
                        <li><a href="exercicio.php?dir=db&file=inserir_1">Inserir Registro #1</a></li>
                        <li><a href="exercicio.php?dir=db&file=consultar">Consultar Registros</a></li>
                        <li><a href="exercicio.php?dir=db&file=excluir_1">Excluir Registro #01</a></li>
                        <li><a href="exercicio.php?dir=db&file=excluir_2">Excluir Registro #02</a></li>
                        <li><a href="exercicio.php?dir=db&file=inserir_2">Inserir Registro #02</a></li>
                        <li><a href="exercicio.php?dir=db&file=alterar">Alterar Registro</a></li>
                        <li><a href="exercicio.php?dir=db&file=inserir_pdo">PDO: Inserir</a></li>
                        <li><a href="exercicio.php?dir=db&file=consultar_pdo">PDO: Consultar</a></li>
                        <li><a href="exercicio.php?dir=db&file=excluir_pdo">PDO: Excluir</a></li>
                        <li><a href="exercicio.php?dir=db&file=alterar_pdo">PDO: Alterar</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>

    <footer class="rodape">
        COD3R & ALUNOS <?php echo date('Y'); ?>
    </footer>


    <script src="" async defer></script>
</body>

</html>