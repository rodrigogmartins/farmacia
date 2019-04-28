<?php

    class Remedio {

        private $id;
        private $nome;
        private $fabricante;
        private $controlado;
        private $quantidade;
        private $preco;

        public function __construct($nome, $fabricante, $controlado, $quantidade, $preco) {
            $this->nome = $nome;
            $this->fabricante = $fabricante;
            $this->controlado = $controlado;
            if ($controlado != 'Sim') {
                $this->controlado = 'Não';
            }
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
            return (int) $this->quantidade;
        }

        public function getPreco() {
            return (double) $this->preco;
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

        public function setControlado($controlado) {
            $this->controlado = $controlado;
            if ($controlado != 'Sim') {
                $this->controlado = 'Não';
            }
        }

        public function setQuantidade($quantidade) {
            $this->quantidade = $quantidade;
        }

        public function setPreco($preco) {
            $this->preco = $preco;
        }

        public function __toString() {
<<<<<<< HEAD:public/php/class/remedio.class.php
            return 'Nome: '.$this->nome.'<br>
                    Fabricante: '.$this->fabricante.'<br>
                    Controlado: '.$this->controlado.'<br>
                    Quantidade: '.(string) $this->quantidade.'<br>
                    Preço: '.(string) $this->preco;
        }
=======
            if ($this->id) {
                $string = 'Id : '.$this->id.
                    '<br>Nome: '.$this->nome.
                    '<br>Fabricante: '.$this->fabricante.
                    '<br>Quantidade: '.$this->quantidade.
                    '<br>Preco: '.$this->preco;
            } else {
                $string = 'Nome: '.$this->nome.
                    '<br>Fabricante: '.$this->fabricante.
                    '<br>Quantidade: '.$this->quantidade.
                    '<br>Preco: '.$this->preco;

            }

            return $string;
        }


>>>>>>> 96b5f4d42d0a6c8a99251350ac755b0ba7498cd2:public/php/class/remedio.class.php
    }

?>