<?php
include 'conexao.php';
class estoqueDao
{
    public function cadastrar(Estoque $estq)
    {
        $sql = "insert into estoquemercado (nomeproduto, precocompra, precovenda, quantidadeproduto, datacompra) 
       values(?,?,?,?,?)";

        $bc = new Conexao();
        $con = $bc->GetConexao();

        $valores = $con->prepare($sql);
        $valores->bindValue(1, $estq->GetNome());
        $valores->bindValue(2, $estq->GetPrecocompra());
        $valores->bindValue(3, $estq->GetPrecovenda());
        $valores->bindValue(4, $estq->GetQuantidadecompra());
        $valores->bindValue(5, $estq->GetDatacompra());

        $resultado = $valores->execute();

        if ($resultado) {
            echo "cadastrado com sucesso <br>";
        } else {
            echo "erro ao cadastrar <br>";
        }
    }


    /*--------------------------------------------------------------*/

    public function consultar()
    {
        $sql = "select * from estoquemercado";

        $bc = new Conexao();
        $con = $bc->GetConexao();

        $valores = $con->prepare($sql);
        $resultado = $valores->execute();

        if ($valores->rowCount() > 0) {
            $resultado = $valores->fetchALL(\PDO::FETCH_ASSOC);
            return $resultado;
        }
    }

    /*--------------------------------------------------------------*/



    public function atualizar(Estoque $estq)
    {
        $sql = "update estoquemercado set nomeproduto=?, precocompra=?, precovenda=?, quantidadeproduto=?, datacompra=? where codigoproduto=?";

        $bc = new Conexao();
        $con = $bc->GetConexao();

        $valores = $con->prepare($sql);
        $valores->bindValue(1, $estq->GetNome());
        $valores->bindValue(2, $estq->GetPrecocompra());
        $valores->bindValue(3, $estq->GetPrecovenda());
        $valores->bindValue(4, $estq->GetQuantidadecompra());
        $valores->bindValue(5, $estq->GetDatacompra());
        $valores->bindValue(6, $estq->GetCodigo());

        $resultado = $valores->execute();

        if ($resultado) {
            echo "atualizado com sucesso <br>";
        } else {
            echo "erro ao atualizar <br>";
        }
    }

    public function apagar(Estoque $estq)
    {
        $sql = "delete from estoquemercado where codigoproduto=?";

        $bc = new Conexao();
        $con = $bc->GetConexao();

        $valores = $con->prepare($sql);

        $valores->bindValue(1, $estq->GetCodigo());

        $resultado = $valores->execute();

        if ($resultado) {
            echo "apagado com sucesso <br>";
        } else {
            echo "erro ao apagar <br>";
        }
    }
}
