<?php

    interface DAO {

        public function inserir($obj);
        public function listar($limit, $offset);
        public function buscar($primaryKey);
        public function alterar($obj);
        public function deletar($primaryKey);

    }

?>