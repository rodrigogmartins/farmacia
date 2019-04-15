<?php

    require_once('static/header.php');

    echo '<div class="col col-lg-6">
            <div>
                <a id="botao" class="btn btn-lg btn-block btn-danger" role="button" href="index.php">
                    HOME
                </a>
            </div>
            <div>
                <a id="botao" class="btn btn-lg btn-block btn-danger" role="button" href="pesquisa_nome.php">
                    POR NOME
                </a>
            </div>
            <div>
                <a id="botao" class="btn btn-lg btn-block btn-danger" role="button" href="pesquisa_fabricante.php">
                    MESMO FABRICANTE
                </a>
            </div>
            <div>
                <a id="botao" class="btn btn-lg btn-block btn-danger" role="button" href="pesquisa_controlado.php">
                    CONTROLADOS
                </a>
            </div>
            <div>
                <a id="botao" class="btn btn-lg btn-block btn-danger" role="button" href="pesquisa_estoque.php">
                    ESTOQUE MENOR QUE 5
                </a>
            </div>
        </div>';
    
    

    require_once('static/footer.php');

?>