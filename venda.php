<?php

session_start();
if ((!isset($_SESSION['user']) == true) && (!isset($_SESSION['senha'])) == true) {
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
    <title>Vendas</title>
    <style>

body{
    background-color:#75EBAA;
    font-family: Arial, Helvetica, sans-serif;
}

p{
    text-align: center;
    font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
}

p:hover{
    cursor: pointer;
}

.principal2{
    border: 1px solid black;
    height: 500px;
    width: 300px;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    background-color: #4EEBAA;
    border-radius: 10px;
    transition: 1s;
    box-shadow: 10px 10px 10px 10px black;
}

.principal2:hover{
    cursor: pointer;
    box-shadow: 0px 0px 100px black; 
}
    </style>
</head>

<body>
    <p>Bem vindo <?php echo $login ?> !</p>
    <div class="principal2">
        <form action="vendascontroller.php" method="post">
            <p><input type="text" name="codigovenda" placeholder="codigo da venda"></p>
            <p><input type="date" name="datavenda" placeholder="data da venda"></p>
            <p><input type="text" name="quantidadevenda" placeholder="quantidade da venda"></p>
            <p><input type="text" name="vendaestoque" placeholder="codigo do produto"></p>

            <p><input type='submit' name='acaoo' value='cadastrar'></p>
            <p> <input type="submit" name="acaoo" value="consultar"></p>
            <p><input type='submit' name='acaoo' value='apagar'></p>
            <p><input type='submit' name='acaoo' value='atualizar'></p>

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