<?php

    require_once('static/header.php');

    echo '<div class="col col-lg-6">
            <div>
                <a class="botao btn btn-lg btn-block btn-danger" role="button" href="index.php">
                    HOME
                </a>
            </div>
            <br>
            <form id="buscar" action="pesquisaordempreco.php" method="post">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ordemPreco" checked id="inlineRadio1" value="ASC">
                    <label class="form-check-label" for="inlineRadio1"> CRESCENTE </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ordemPreco" id="inlineRadio2" value="DESC">
                    <label class="form-check-label" for="inlineRadio2"> DECRESCENTE </label>
                </div>
                <div class="input-group mb-3">
                    <button type="submit" class="btn btn-lg btn-block btn-danger botao" id="teste"> LISTAR POR ORDEM DE PREÇO </button>
                </div>
            </form>
            <form id="buscar" action="pesquisaordemquantidade.php" method="post">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ordemQuantidade" checked id="inlineRadio3" value="ASC">
                    <label class="form-check-label" for="inlineRadio3"> CRESCENTE </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="ordemQuantidade" id="inlineRadio4" value="DESC">
                    <label class="form-check-label" for="inlineRadio4"> DECRESCENTE </label>
                </div>
                <div class="input-group mb-3">
                    <button type="submit" class="btn btn-lg btn-block btn-danger botao" id="teste"> LISTAR POR ORDEM DE QUANTIDADE </button>
                </div>
            </form>
        </div>';

    require_once('static/footer.php');

?>