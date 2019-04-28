<?php

    include_once('class/remedio.class.php');
    include_once('dao/remedio.dao.php');

    $remedioDao = new RemedioDAO();

    $id = $_GET['id'];

    $remedioDao->deletar($id);

    $goBack = "<script>window.location.href = document.referrer</script>";
    echo $goBack;
    exit();


?>