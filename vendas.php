<?php

class vendas
{
    private $codigovenda, $datavenda, $quantidadevenda,
     $vendaestoque;

     public function GetCodigo()
     {
        return $this->codigovenda;
     }
     public function SetCodigo($codigos)
     {
        $this->codigovenda = $codigos;
     }

     public function GetData()
     {
        return $this->datavenda;
     }
     public function SetData($datas)
     {
        $this->datavenda = $datas;
     }

     public function GetQuantidadevenda()
     {
        return $this->quantidadevenda;
     }
     public function SetQnt($qntvenda)
     {
        $this->quantidadevenda = $qntvenda;
     }

     public function GetVendaestoque()
     {
        return $this->vendaestoque;
     }
     public function SetVendaestoque($vendaest)
     {
        $this->vendaestoque = $vendaest;
     }
}