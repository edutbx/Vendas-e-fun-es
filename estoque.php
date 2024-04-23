<?php

class estoque
{

    private $codigoproduto, $nomeproduto, $precocompra, $precovenda, $quantidadeproduto, $datacompra;

    public function GetCodigo()
    {
        return $this->codigoproduto;
    }
    public function SetCodigo($codigo)
    {
        $this->codigoproduto = $codigo;
    }

    public function GetNome()
    {
        return $this->nomeproduto;
    }
    public function SetNome($nome)
    {
        $this->nomeproduto = $nome;
    }

    public function GetPrecocompra()
    {
        return $this->precocompra;
    }
    public function SetPrecocompra($precoc)
    {
        $this->precocompra = $precoc;
    }

    public function GetPrecovenda()
    {
        return $this->precovenda;
    }
    public function SetPrecovenda($precov)
    {
        $this->precovenda = $precov;
    }

    public function GetQuantidadecompra()
    {
        return $this->quantidadeproduto;
    }
    public function SetQuantidadecompra($qntdadecompra)
    {
        $this->quantidadeproduto = $qntdadecompra;
    }

    public function GetDatacompra()
    {
        return $this->datacompra;
    }
    public function SetDatacompra($data)
    {
        $this->datacompra = $data;
    }
}
