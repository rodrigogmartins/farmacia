<?php

    include_once('static/header.php');
    include_once('class/remedio.class.php');
    include_once('dao/remedio.dao.php');

    $remedioDao = new RemedioDAO();

    echo '<div class="col col-lg-6">
            <div>
                <a class="botao btn btn-lg btn-block btn-danger" role="button" href="index.php">
                    HOME
                </a>
            </div>
            <div>
                <a class="btn btn-lg btn-block btn-danger botao" role="button" href="pesquisa.php">
                    VOLTAR
                </a>
            </div>
            <div id="resultados">';

    $quantidade = $remedioDao->quantidadeDeRemediosPorFabricante($_POST['fabricante']);

    echo '<div class="remedio">'. $quantidade .'</div><br>';


    echo '</div>
        </div>';

    include_once('static/footer.php');

?>