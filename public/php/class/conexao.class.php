<?php

    class Conexao {

        public function conectaBD() {
            $conexao = mysqli_connect('localhost', 'root', 'password', 'farmacia');

            if(!$conexao) {
                throw new Exception("Erro ao tentar conectar com banco de dados", 1);
            }

            return $conexao;
        }
    }

?>