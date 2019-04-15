<?php

    class Remedios {

        private $id;
        private $nome;
        private $fabricante;
        private $controlado;
        private $quantidade;
        private $preco;

        public function __constructor($nome, $fabricante, $controlado, $quantidade, $preco) {
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

        public function setId($id) {
            $this->id = $id;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setFabricante($fabricante) {
            $this->fabricante = $fabricante;
        }

        public function setQuantidade($quantidade) {
            $this->quantidade = $quantidade;
        }

        public function setPreco($preco) {
            $this->preco = $preco;
        }
    }

?>