<?php

    require_once('static/header.php');

    echo '<div class="col col-lg-6">
            <div>
                <a class="botao btn btn-lg btn-block btn-danger" role="button" href="index.php">
                    HOME
                </a>
            </div>
            <br>
            <form id="buscar" action="pesquisapornome.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="nome" placeholder="Nome do remédio">
                </div>
                <div class="input-group mb-3">
                    <button type="submit" class="btn btn-lg btn-block btn-danger botao" id="teste"> PESQUISAR POR NOME </button>
                </div>
            </form>
            <form id="buscar" action="remediosporfabricante.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="fabricante" placeholder="Nome do fabricante">
                </div>
                <div class="input-group mb-3">
                    <button type="submit" class="btn btn-lg btn-block btn-danger botao" id="teste"> PESQUISAR POR FABRICANTE </button>
                </div>
            </form>

            <form id="buscar" action="pesquisacontrolados.php" method="post">
                <div class="input-group mb-3">
                    <button type="submit" class="btn btn-lg btn-block btn-danger botao" id="teste"> PESQUISAR CONTROLADOS </button>
                </div>
            </form>
            <form id="buscar" action="pesquisaestoquebaixo.php" method="post">
                <div class="input-group mb-3">
                    <button type="submit" class="btn btn-lg btn-block btn-danger botao" id="teste"> PESQUISAR ESTOQUE BAIXO </button>
                </div>
            </form>
        </div>';

    require_once('static/footer.php');

?>