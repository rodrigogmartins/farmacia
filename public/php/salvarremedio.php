<?php

    include_once('class/remedio.class.php');
    include_once('dao/remedio.dao.php');

    $remedioDao = new RemedioDAO();

    $nome = $_POST['nome'];
    $fabricante = $_POST['fabricante'];
    if(isset($_POST['controlado'])) {
        $controlado = 'Sim';
    } else {
        $controlado = 'Não';
    }
    $quantidade = $_POST['quantidade'];
    $preco = str_replace(',', '.', $_POST['preco']);
    $remedio = new Remedio($nome, $fabricante, $controlado, $quantidade, $preco);

    if (array_key_exists('id',$_GET)) {
        $remedio->setId($_GET['id']);
        $remedioDao->alterar($remedio);
        $from = $_GET['from'];
        header('Location: '.$from.'.php');
        exit();
    } else {
        $remedioDao->inserir($remedio);
        header('Location: inserir.php');
        header('Cache-Control: no-store, no-cache, must-revalidate');
        header('Cache-Control: post-check=0, pre-check=0', false);
        exit();
    }


?>