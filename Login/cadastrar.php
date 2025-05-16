<?php
require "Usuario.class.php";
$connection = new Usuario();
if ($connection) {
    if ($connection->chkUser("teste@teste.com")) {
        echo "<script>alert('Usuario ja existe!')</script>";
    } else {
        echo "<script>alert('Usuario nao existe!')</script>";
        $connection->cadastrar("userTeste","user@user.com","senha213");
        echo "<script>alert('Usuario cadastrado!')</script>";
    }
} else {
    echo "Erro ao conectar ao banco de dados!";
}