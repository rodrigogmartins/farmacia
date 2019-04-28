<?php

    require_once('static/header.php');
    require_once('../class/remedio.class.php');
    require_once('../dao/remedio.dao.php');

    $remedioDAO = new RemedioDAO();
    $quantidade = $remedioDAO->quantidadeDeRemediosPorFabricante('loja');

    echo '<div class="col col-lg-6">
            <div>
                <a id="botao" class="btn btn-lg btn-block btn-danger" role="button" href="index.php">
                    HOME
                </a>
            </div>
            <div>
                <a id="botao" class="btn btn-lg btn-block btn-danger" role="button" href="pesquisa.php">
                    VOLTAR
                </a>
            </div>';

            echo '<div> '.$quantidade.' </div>';

    echo '</div>';     
   

    require_once('static/footer.php');

?>