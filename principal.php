<?php

session_start();
if((!isset($_SESSION['user'])==true) && (!isset($_SESSION['senha']))== true){
    header('Location:index.php');
}

$login = $_SESSION['user'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylep.css">
    <title>Estoque</title>
</head>
<body>
    <p>Bem vindo <?php echo $login ?> !</p>
    <div class="principal">
    <form action="estoquecontroller.php" method="post">
        <p><input type='text' name='codigoproduto' placeholder='codigo do produto'></p>
        <p><input type='text' name='nomeproduto' placeholder='nome do produto'></p>
        <p><input type='text' name='precocompra' placeholder='preco da compra'></p>
        <p><input type='text' name='precovenda' placeholder='preco da venda'></p>
        <p><input type='text' name='quantidadecompra' placeholder='quantidade de compra'></p>
        <p><input type='date' name='datacompra' placeholder='data da compra'></p>

        <p><input type='submit' name='acao' value='cadastrar'></p>
        <p><input type='submit' name='acao' value='consultar'></p>
        <p><input type='submit' name='acao' value='apagar'></p>
        <p><input type='submit' name='acao' value='atualizar'></p>
    </form>

    <form action="transferir.php" method="post">
        <input type="submit" value="Voltar">
    </form><br>

    <form action="deslogar.php" method="post">
        <input type="submit" value="deslogar">
    </form>
    </div>

</body>
</html>