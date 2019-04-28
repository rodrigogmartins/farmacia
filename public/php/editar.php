<?php

    include_once('static/header.php');
    include_once('class/remedio.class.php');
    include_once('dao/remedio.dao.php');

    $remedioDao = new RemedioDAO();

    $id = $_GET['id'];
    $from = $_GET['from'];

    $remedio = $remedioDao->buscar($id);
    if ($remedio->getControlado() == 'Sim') {
        $controlado = "checked";
    }

    echo '<div class="col col-lg-6">
            <div>
                <button class="btn btn-lg btn-block btn-danger botao" id="voltar" role="button">
                    VOLTAR
                </button>
            </div>
            <br>
            <form id="inserir" action="salvarremedio.php?id='.$id.'&from='.$from.'" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nome" name="nome" value="'.$remedio->getNome().'">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Fabricante" name="fabricante" value="'.$remedio->getFabricante().'">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="controlado" value="True" id="controlado" '.$controlado.'>
                    <label class="form-check-label" id="controlado" for="controlado"> Controlado </label>
                </div>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"> Quantidade </span>
                </div>
                <input type="number" class="form-control" placeholder="Quantidade" name="quantidade" value="'.$remedio->getQuantidade().'">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">R$</span>
                    </div>
                    <input type="text" name="preco" placeholder="Preco" value="'.$remedio->getPreco().'" class="form-control">
                </div>
                <div>
                    <button type="submit" class="btn btn-lg btn-block btn-danger botao" id="teste"> Editar </button>
                </div>
            </form>
        </div>
        <script src="../js/voltar.js"></script>';

    include_once('static/footer.php');

?>