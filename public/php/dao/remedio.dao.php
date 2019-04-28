<?php

    include_once('class/conexao.class.php');
    include_once('class/remedio.class.php');
    include_once('interface/dao.php');

    class RemedioDAO implements DAO {

        public function inserir($remedio) {
            $conexao = new Conexao();
            $conexao = $conexao->conectaBD();

            $SQL = "INSERT INTO remedio (nome, fabricante, controlado, quantidade, preco)
                    VALUES ('".$remedio->getNome()."', '".$remedio->getFabricante()."', '".$remedio->getControlado()."', ".(int) $remedio->getQuantidade().", ".(double) $remedio->getPreco().")";

            mysqli_query($conexao, $SQL);
            mysqli_close($conexao);
        }

        public function listar() {
            $conexao = new Conexao();
            $conexao = $conexao->conectaBD();

            $SQL = "SELECT * FROM remedio";
            $resultados  = mysqli_query($conexao, $SQL);
            mysqli_close($conexao);

            $remedios = array();
            while($linha = mysqli_fetch_array($resultados)) {
                $remedio = new Remedio($linha['nome'], $linha['fabricante'],
                    $linha['controlado'], $linha['quantidade'], $linha['preco']);
                $remedio->setId($linha['id']);
                array_push($remedios, $remedio);
            }

            if (count($remedios) == 0) {
                array_push($remedios, 'Nenhum remédio encontrado.');
            }

            return $remedios;
        }

        public function buscar($id) {
            $conexao = new Conexao();
            $conexao = $conexao->conectaBD();

            $SQL = "SELECT * FROM remedio WHERE id = ".(int) $id;
            $resultado = mysqli_query($conexao, $SQL);
            mysqli_close($conexao);

            $linha = mysqli_fetch_array($resultado);
            $remedio = new Remedio($linha['nome'], $linha['fabricante'],
                $linha['controlado'], $linha['quantidade'], $linha['preco']);
            $remedio->setId($linha['id']);

            return $remedio;
        }

        public function alterar($remedio) {
            $conexao = new Conexao();
            $conexao = $conexao->conectaBD();

            $SQL = "UPDATE remedio SET nome = '".$remedio->getNome()."', fabricante = '".$remedio->getFabricante()."', controlado = '".$remedio->getControlado()."', quantidade = '".$remedio->getQuantidade()."', preco = '".$remedio->getPreco()."' WHERE id = ".(int) $remedio->getId();

            mysqli_query($conexao, $SQL);
            mysqli_close($conexao);
        }

        public function deletar($id) {
            $conexao = new Conexao();
            $conexao = $conexao->conectaBD();

            $SQL = "DELETE FROM remedio WHERE id = ".(int) $id;
            mysqli_query($conexao, $SQL);
            mysqli_close($conexao);
        }

        public function buscarRemediosControlados() {
            $conexao = new Conexao();
            $conexao = $conexao->conectaBD();

            $SQL = "SELECT * FROM remedio WHERE controlado = 'Sim'";
            $resultados  = mysqli_query($conexao, $SQL);
            mysqli_close($conexao);

            $remedios = array();
            while($linha = mysqli_fetch_array($resultados)) {
                $remedio = new Remedio($linha['nome'], $linha['fabricante'],
                    $linha['controlado'], $linha['quantidade'], $linha['preco']);
                $remedio->setId($linha['id']);
                array_push($remedios, $remedio);
            }

            if (count($remedios) == 0) {
                array_push($remedios, 'Nenhum remédio controlado encontrado.');
            }

            return $remedios;
        }

        public function buscarRemediosBaixoEstoque() {
            $conexao = new Conexao();
            $conexao = $conexao->conectaBD();

            $SQL = "SELECT * FROM remedio WHERE quantidade < 5";
            $resultados  = mysqli_query($conexao, $SQL);
            mysqli_close($conexao);

            $remedios = array();
            while($linha = mysqli_fetch_array($resultados)) {
                $remedio = new Remedio($linha['nome'], $linha['fabricante'],
                    $linha['controlado'], $linha['quantidade'], $linha['preco']);
                $remedio->setId($linha['id']);
                array_push($remedios, $remedio);
            }

            if (count($remedios) == 0) {
                array_push($remedios, 'Nenhum remédio com baixo estoque encontrado.');
            }

            return $remedios;
        }

        public function buscarOrdenadoPorPreco($ordem) {
            $conexao = new Conexao();
            $conexao = $conexao->conectaBD();

            $SQL = "SELECT * FROM remedio ORDER BY preco ".$ordem;
            $resultados  = mysqli_query($conexao, $SQL);
            mysqli_close($conexao);

            $remedios = array();
            while($linha = mysqli_fetch_array($resultados)) {
                $remedio = new Remedio($linha['nome'], $linha['fabricante'],
                    $linha['controlado'], $linha['quantidade'], $linha['preco']);
                $remedio->setId($linha['id']);
                array_push($remedios, $remedio);
            }

            if (count($remedios) == 0) {
                array_push($remedios, 'Nenhum remédio encontrado.');
            }

            return $remedios;
        }

        public function buscarOrdenadoPorQuantidade($ordem) {
            $conexao = new Conexao();
            $conexao = $conexao->conectaBD();

            $VALORES = array($limit, $offset);
            $SQL = "SELECT * FROM remedio ORDER BY quantidade ".$ordem;
            $resultados  = mysqli_query($conexao, $SQL);
            mysqli_close($conexao);

            $remedios = array();
            while($linha = mysqli_fetch_array($resultados)) {
                $remedio = new Remedio($linha['nome'], $linha['fabricante'],
                    $linha['controlado'], $linha['quantidade'], $linha['preco']);
                $remedio->setId($linha['id']);
                array_push($remedios, $remedio);
            }

            if (count($remedios) == 0) {
                array_push($remedios, 'Nenhum remédio com baixo estoque encontrado.');
            }

            return $remedios;
        }

        public function buscarPorNome($nome) {
            $conexao = new Conexao();
            $conexao = $conexao->conectaBD();

            $SQL = "SELECT * FROM remedio WHERE nome like '%".$nome."%'";
            $resultados = mysqli_query($conexao, $SQL);
            mysqli_close($conexao);

            $remedios = array();
            while($linha = mysqli_fetch_array($resultados)) {
                $remedio = new Remedio($linha['nome'], $linha['fabricante'],
                    $linha['controlado'], $linha['quantidade'], $linha['preco']);
                $remedio->setId($linha['id']);
                array_push($remedios, $remedio);
            }

            if (count($remedios) == 0) {
                array_push($remedios, 'Nenhum remédio encontrado com o nome: '.$nome);
            }

            return $remedios;
        }

        public function quantidadeDeRemediosPorFabricante($fabricante) {
            $conexao = new Conexao();
            $conexao = $conexao->conectaBD();

            $SQL = "SELECT count(*) as quantidade FROM remedio WHERE fabricante like '%".$fabricante."%' GROUP BY '". $fabricante."'";
            $resultado = mysqli_query($conexao, $SQL);
            mysqli_close($conexao);

            $linha = mysqli_fetch_array($resultado);
            $quantidade = $linha['quantidade'];

            if ((int) $quantidade == 0) {
                $quantidade = 'Não foram encontrados remédios do fabricante: '.$fabricante;
            } else {
                $quantidade = 'Possuimos '.$quantidade.' remédios da marca '.$fabricante;
            }

<<<<<<< HEAD:public/php/dao/remedio.dao.php
            return $quantidade;
=======
        public function deletar($id) {
            $conexao = new Conexao();
            $conexao = $conexao->conectaBD();
            $SQL = 'DELETE FROM remedio WHERE id = '.$id;
            mysqli_query($SQL, $conexao);
            mysqli_close($conexao);
>>>>>>> 96b5f4d42d0a6c8a99251350ac755b0ba7498cd2:public/php/dao/remedio.dao.php
        }
    }

?>