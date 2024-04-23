<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha</title>
    <style>
        body {
            background-color: #75EBAA;
            margin: 0;
        }

        .botoes {
            display: flex;
            justify-content: center;
            padding: 200px;
            align-items: center;
            justify-content: space-evenly;
        }

        input{
            border-radius: 50px;
        }

        input:hover{
            background-color: #75EBAA;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="botoes">
        <div class="bot1">
            <form action="principal.php" method="post">
                <input type="submit" value="Estoque">
            </form>
        </div>
        <div class="bot2">
            <form action="venda.php" method="post">
                <input type="submit" value="Vendas">
            </form>
        </div>
    </div>
</body>

</html>