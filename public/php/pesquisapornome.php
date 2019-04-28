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

            $remedios = $remedioDao->buscarPorNome($_POST['nome']);

            foreach ($remedios as $remedio) {
                echo '<div class="remedio">
                        <div>'.
                            $remedio.
                        '</div>
                        <div>
                            <div id="botoes">
                                <div>
                                    <form action="deletar.php?id='.$remedio->getId().'" method="post">
                                        <input class="botao btn btn-danger" type=submit value="EXCLUIR">
                                    </form>
                                </div>
                                <div>
                                    <form action="editar.php?id='.$remedio->getId().'&from=pesquisapornome" method="post">
                                        <input class="botao btn btn-danger" type=submit value="EDITAR">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><br>';
            }


    echo '</div>
        </div>';

    include_once('static/footer.php');

?>