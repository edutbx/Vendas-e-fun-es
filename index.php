<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastrar-Login</title>
</head>

<body>
    <div class="container">
        <div class="div1">
            <p>Cadastre</p>
            <form action="cadastrar.php" method="post">
                <label>Usuario</label>
                <input type="text" name="user" required><br><br>
                <label>Senha</label>
                <input type="password" name="password" required><br><br>
                <input type="submit" value="cadastrar">
            </form>
        </div>

        <div class="div2">
                <p>Logue</p>
                <form action="validarlogin.php" method="post">
                    <label>Usuario</label>
                    <input type="text" name="user" required><br><br>
                    <label>Senha</label>
                    <input type="password" name="password" required><br><br>
                    <input type="submit" value="logar"><br><br>
                </form>
        </div>

    </div>
</body>

</html>