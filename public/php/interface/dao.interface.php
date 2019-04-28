<?php

    interface DAO {

        public function inserir($obj);
        public function listar();
        public function buscar($primaryKey);
        public function alterar($obj);
        public function deletar($primaryKey);

    }

?>