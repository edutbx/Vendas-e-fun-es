<?php
require_once "vendasdao.php";
require_once "vendas.php";
$codigovenda = filter_input(INPUT_POST, 'codigovenda');
$datavenda = filter_input(INPUT_POST, 'datavenda');
$quantidadevenda = filter_input(INPUT_POST, 'quantidadevenda');
$vedndaestoque = filter_input(INPUT_POST, 'vendaestoque');
$acaoo = filter_input(INPUT_POST, 'acaoo');

$vendas1 = new Vendas();
$vendasdao = new VendasDao();

$vendas1->SetCodigo($codigovenda);
$vendas1->SetData($datavenda);
$vendas1->SetQnt($quantidadevenda);
$vendas1->SetVendaestoque($vedndaestoque);

if($acaoo=='consultar'){
    foreach($vendasdao->consultar() as $consultt){
        echo $consultt['codigovenda']."<br>";
        echo $consultt['quantidadevenda']."<br>";
        echo $consultt['vendaestoque']."<br>";
        $datas = $consultt['datavenda'];
        $datas=implode("/", array_reverse(explode("-", $datas)));
        echo $datas."<br><br>";
    }
}elseif ($acaoo == 'cadastrar') {
    $vendasdao->cadastrar($vendas1);
} elseif ($acaoo == 'apagar') {
    $vendasdao->apagar($vendas1);
} elseif ($acaoo == 'atualizar') {
    $vendasdao->atualizar($vendas1);
}

echo '<a href="venda.php">Voltar</a>';



