<?php
//criando sessão
session_start();

$server = "localhost";
$usuario = "root";
$senha = "";
$banco = "lumany";

try {
    $conexao = new PDO("mysql:host=$server;dbname=$banco", $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erro) {
    echo "Ocorreu um erro de conexao: {$erro->getMessage()}";
    $conexao = null;
}
