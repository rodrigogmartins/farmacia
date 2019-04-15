<?php

    class Conexao {

        private $URL = 'url';
        private $USER = 'postgres';
        private $PASSWORD = 'postgres';

        public function conectaBD() {
            $conexao = mysqli_connect($URL, $user, $PASSWORD);

            if(!$conexao) {
                throw new Exception("Erro ao tentar conectar com banco de dados", 1);
            }

            return $conexao;
        }
    }

?>