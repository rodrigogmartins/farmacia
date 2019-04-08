<?php

    class Remedios {

        private $id;
        private $nome;
        private $fabricante;
        private $controlado;
        private $quantidade;
        private $preco;

        public function __constructor(String $nome, String $fabricante, Boolean $controlado, int $quantidade, Float $preco) {
            $this->nome = $nome;
            $this->fabricante = $fabricante;
            $this->controlado = $controlado;
            $this->quantidade = $quantidade;
            $this->preco = $preco;
        }

        public function getId() {
            return $this->id;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getFabricante() {
            return $this->fabricante;
        }

        public function getControlado() {
            return $this->controlado;
        }

        public function getQuantidade() {
            return $this->quantidade;
        }

        public function getPreco() {
            return $this->preco;
        }

        public function setId(int $id) {
            $this->id = $id;
        }

        public function setNome(String $nome) {
            $this->nome = $nome;
        }

        public function setFabricante(String $fabricante) {
            $this->fabricante = $fabricante;
        }

        public function setQuantidade(int $quantidade) {
            $this->quantidade = $quantidade;
        }

        public function setPreco(Float $preco) {
            $this->preco = $preco;
        }
    }

?>