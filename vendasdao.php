<?php
include 'conexao.php';
class vendasDAO
{
    public function cadastrar(Vendas $vend)
    {
        $sql = "insert into vendamercado (datavenda,
        quantidadevenda, vendaestoque)
        values(?,?,?)";

        $ab = new Conexao();
        $com = $ab->GetConexao();

        $valor = $com->prepare($sql);
        $valor->bindValue(1, $vend->GetData());
        $valor->bindValue(2, $vend->GetQuantidadevenda());
        $valor->bindValue(3, $vend->GetVendaestoque());

        $resultados = $valor->execute();

        if ($resultados) {
            echo "venda cadastrada com sucesso <br>";
        } else {
            echo "erro ao cadastrar a venda <br>";
        }
    }

    /*------------------------------------------------------ */

    public function consultar()
    {
        $sql = "select * from vendamercado";

        $ab = new Conexao();
        $com = $ab->GetConexao();

        $valor = $com->prepare($sql);
        $resultados = $valor->execute();

        if ($valor->rowCount() > 0) {
            $resultados = $valor->fetchALL(\PDO::FETCH_ASSOC);
            return $resultados;
        }
    }

    /*------------------------------------------------------ */

    public function atualizar(Vendas $vend)
    {
        $sql = "update vendamercado set datavenda=?, 
            quantidadevenda=?, vendaestoque=? where codigovenda=?";

        $ab = new Conexao();
        $com = $ab->GetConexao();

        $valor = $com->prepare($sql);
        $valor->bindValue(1, $vend->GetData());
        $valor->bindValue(2, $vend->GetQuantidadevenda());
        $valor->bindValue(3, $vend->GetVendaestoque());
        $valor->bindValue(4, $vend->GetCodigo());

        $resultados = $valor->execute();

        if ($resultados) {
            echo "atualizado com sucesso <br>";
        } else {
            echo "erro ao atualizar <br>";
        }
    }

    public function apagar(Vendas $vend)
    {
        $sql = "delete from vendamercado where codigovenda=?";

        $ab = new Conexao();
        $com = $ab->GetConexao();

        $valor  = $com->prepare($sql);

        $valor->bindValue(1, $vend->GetCodigo());

        $resultados = $valor->execute();

        if ($resultados) {
            echo "apagado com sucesso <br>";
        } else {
            echo "erro ao apagar <br>";
        }
    }
}
