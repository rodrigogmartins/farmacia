<?php

    include_once('class/conexao.class.php');
    include_once('class/remedios.class.php');
    include_once('interface/dao.interface.php');

    class RemediosDAO implements DAO {

        public function inserir(Remedios $remedio) {
            $conexao = new Conexao();
            $conexao = $conexao->conectaBD();

            $VALORES = array($remedio->getNome(), $remedio->getFabricante(), $remedio->getControlado(), $remedio->getQuantidade(), $remedio->getPreco());
            $SQL = 'INSERT INTO remedio (nome, fabricante, controlado, quantidade, preco) VALUES '.$VALORES[0].','.$VALORES[1].','.$VALORES[2].','.$VALORES[3].','.$VALORES[4];

            mysqli_query($SQL, $conexao);
            mysqli_close($conexao);
        }

        public function listar($limit, $offset) {
            $conexao = new Conexao();
            $conexao = $conexao->conectaBD();

            $VALORES = array($limit, $offset);
            $SQL = 'SELECT * FROM remedio ORDER BY  DESC LIMIT '.$limit.' OFFSET '.$offset;
            $resultados  = mysqli_query($SQL, $conexao);
            mysqli_close($conexao);

            $remedios = array();
            while($linha = mysqli_fetch_array($resultados)) {
                $remedio = new Remedio($linha['nome'], $linha['fabricante'],
                    $linha['controlado'], $linha['quantidade'], $linha['preco']);
                $remedio->setId($linha['id']);
                array_push($remedios, $remedio);
            }

            return $remedios;
        }

        public function buscar($id) {
            $conexao = new Conexao();
            $conexao = $conexao->conectaBD();

            $SQL = 'SELECT * FROM remedios WHERE id = '.$id;
            $resultado = mysqli_query($SQL, $conexao);
            mysqli_close($conexao);

            $linha = mysqli_fetch_array($resultados);
            $remedio = new Remedio($linha['nome'], $linha['fabricante'],
                $linha['controlado'], $linha['quantidade'], $linha['preco']);
            $remedio->setId($linha['id']);

            return $remedio;
        }

        public function alterar($post) {
            $conexao = new Conexao();
            $conexao = $conexao->conectaBD();

            $VALORES = array($remedio->getNome(), $remedio->getFabricante(), $remedio->getControlado(), $remedio->getQuantidade(), $remedio->getPreco(), $remedio->getId());

            $SQL = 'UPDATE remedio SET nome = '.$VALORES[0].', fabricante = '.$VALORES[1].', controlado = '.$VALORES[2].', quantidade = '.$VALORES[3].',     preco = '.$VALORES[4].' WHERE id = '.$VALORES[5];

            mysqli_query($SQL, $conexao);
            mysqli_close($conexao);
        }

        public function deletar(int $id) {
            $conexao = new Conexao();
            $conexao = $conexao->conectaBD();
            $SQL = 'DELETE FROM remedio WHERE id = '.$id;
            mysqli_query($SQL, $conexao);
            mysqli_close($conexao);
        }
    }
?>