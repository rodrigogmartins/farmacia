<?php

    require_once('static/header.php');
    require_once('../class/remedio.class.php');
    require_once('../dao/remedio.dao.php');

    $remedioDAO = new RemedioDAO();
    $remedios = $remedioDAO->buscarRemediosBaixoEstoque(10,0);

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

            foreach ($remedios as $remedio) {
                echo '<div> '.$remedio.' </div>';
            }    
    echo '</div>';     
   

    require_once('static/footer.php');

?>