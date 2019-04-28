<?php

    include_once('static/header.php');

    echo '<div class="col col-lg-6">
            <div>
                <a class="btn btn-lg btn-block btn-danger botao" role="button" href="index.php">
                    HOME
                </a>
            </div>
            <br>
            <form id="inserir" action="salvarremedio.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="nome" placeholder="Nome">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="fabricante" placeholder="Fabricante">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="controlado" value="True" id="controlado">
                    <label class="form-check-label" id="controlado" for="controlado"> Controlado </label>
                </div>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Quantidade </span>
                </div>
                <input type="number" class="form-control" name="quantidade">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">R$</span>
                    </div>
                    <input type="text" name="preco" placeholder="Preco" class="form-control">
                </div>
                <div>
                    <button type="submit" class="btn btn-lg btn-block btn-danger botao" id="teste"> Adicionar </button>
                </div>
            </form>
        </div>';

    include_once('static/footer.php');

?>