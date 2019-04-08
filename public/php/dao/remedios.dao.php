<?php

    include_once('class/conexao.class.php');
    include_once('class/remedios.class.php');
    include_once('interface/dao.interface.php');

    class RemediosDAO implements DAO {

        public function inserir($remedio) {
            $conexao = new Conexao();
            $conexao = $conexao->conectaBD();

            $SQL = $conexao->prepare('INSERT INTO remedio (nome, fabricante, controlado, quantidade, preco)
                VALUES (?, ?, ?, ?, ?)');
            $SQL->bind_param('ssiid', $remedio->getNome(), $remedio->getFabricante(), $remedio->getControlado(),
                $remedio->getQuantidade(), $remedo->getPreco());
            $SQL->execute();
            $SQL->close();
            $conexao->close();     
        }

        public function listar(int $limit, int $offset) {
            $conexao = new Conexao();
            $conexao = $conexao->conectaBD();
            $SQL = 'SELECT * FROM remedio ORDER BY  DESC LIMIT $1 OFFSET $2';
            $VALORES = array($limit, $offset);
            $resultados = pg_query_params($conexao, $SQL, $VALORES);
            pg_close($conexao);

            $remedios = array();
            while($resultado = pg_fetch_assoc($resultados)) {
                $remedio = new Remedio($resultado['nome'], $resultado['fabricante'],
                    $resultado['controlado'], $resultado['quantidade'], $resultado['preco']);
                $remedio->setId($resultado['id']);
                array_push($remedios, $remedio);
            }

            return $remedios;
        }

        public function buscar(int $id) {
            $conexao = new Conexao();
            $conexao = $conexao->conectaBD();
            $SQL = 'SELECT * FROM remedios WHERE id = $1';
            $VALORES = array($id);
            $resultado = pg_query_params($conexao, $SQL, $VALORES);
            pg_close($conexao);

            $resultado = pg_fetch_array($resultado);
            $remedio = new Remedio($resultado['nome'], $resultado['fabricante'],
                $resultado['controlado'], $resultado['quantidade'], $resultado['preco']);
            $remedio->setId($resultado['id']);

            return $remedio;
        }

        public function alterar($post) {
            $conexao = new Conexao();
            $conexao = $conexao->conectaBD();
            $SQL = 'UPDATE remedio SET nome = $1, fabricante = $2,
                controlado = $3, quantidade = $4, preco = $5 WHERE id = $5';
            $VALORES = array();
            $resultado = pg_query_params($conexao, $SQL, $VALORES);
            $VALORES = array($remedio->getNome(), $remedio->getFabricante(),
                $remedio->getControlado(), $remedio->getQuantidade(), $remedo->getPreco());
            pg_close($conexao);
        }

        public function deletar(int $id) {
            $conexao = new Conexao();
            $conexao = $conexao->conectaBD();
            $SQL = 'DELETE FROM remedio WHERE id = $1';
            $VALORES = array($id);
            $resultado = pg_query_params($conexao, $SQL, $VALORES);
            pg_close($conexao);
        }
    }
?>