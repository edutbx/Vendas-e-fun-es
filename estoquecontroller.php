<?php
require_once "estoquedao.php";
require_once "estoque.php";
$codigoproduto = filter_input(INPUT_POST, 'codigoproduto');
$nomeproduto = filter_input(INPUT_POST, 'nomeproduto');
$precocompra = filter_input(INPUT_POST, 'precocompra');
$precovenda = filter_input(INPUT_POST, 'precovenda');
$quantidadecompra = filter_input(INPUT_POST, 'quantidadecompra');
$datacompra = filter_input(INPUT_POST, 'datacompra');
$acao = filter_input(INPUT_POST, 'acao');

$estoque = new Estoque();
$estoquedao = new EstoqueDao();

$estoque->SetCodigo($codigoproduto);
$estoque->SetNome($nomeproduto);
$estoque->SetPrecocompra($precocompra);
$estoque->SetPrecoVenda($precovenda);
$estoque->SetQuantidadecompra($quantidadecompra);
$estoque->SetDatacompra($datacompra);

if($acao=='consultar'){
    $estoquedao->consultar();
    foreach($estoquedao->consultar() as $consult){
        echo $consult['codigoproduto']."<br>";
        echo $consult['nomeproduto']."<br>";
        echo $consult['precocompra']."<br>";
        echo $consult['precovenda']."<br>";
        echo $consult['quantidadeproduto']."<br>";
        $data = $consult['datacompra'];
        $data=implode("/", array_reverse(explode("-", $data)));
        echo $data."<br><br>";
    }
}else if ($acao == 'cadastrar') {
    $estoquedao->cadastrar($estoque);
} else if ($acao == 'apagar') {
    $estoquedao->apagar($estoque);
} else if ($acao == 'atualizar') {
    $estoquedao->atualizar($estoque);
}

echo '<a href="principal.php">Voltar</a>';
