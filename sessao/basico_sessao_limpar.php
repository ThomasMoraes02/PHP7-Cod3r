<?php 

session_start();

session_destroy();
header("Location: basico_sessao.php"); //Quando entrar nessa linha ele vai mudar a URL