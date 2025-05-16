<?php
require 'Usuario.class.php';

$sucesso = $usuario = new Usuario();

if ($sucesso) {


} else {
    echo "<h1>Banco indisponivel. Tente mais tarde";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        header {
            position: absolute;
            margin: 0;
            display: flex;
            top: 0;
            width: 100%;
            height: 90px;
            background-color: #333;
            align-items: center;
            color: whitesmoke;
        }
        header p{
            font-size: 28px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding-left: 3vh;
        }
        .botao{
            cursor: pointer;
        }
    </style>
</head>

<body>

    <header>
        <p>Programa de Login</p>
    </header>

    <form action="teste.php" method="post" class="form">
        <h3 class="Login">Cadastrar</h3>
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="senha" placeholder="Senha" required>

        <input type="submit" value="Cadastrar" class="botao">

    </form>
</body>

</html>