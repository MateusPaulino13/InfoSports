<?php
require_once "connect.php";

if (isset($_POST['email']) && isset($_POST['senha']) && $conexao != null) {
    //query sql
    $query = $conexao->prepare("SELECT * FROM usuarios WHERE Email = ? AND Senha = ?");
    $query->execute(array($_POST['email'], $_POST['senha']));

    if ($query->rowCount()) {
        //pegar tudo do usuário
        $user = $query->fetchAll(PDO::FETCH_ASSOC)[0];

        //sessão do usuário
        $_SESSION['usuario'] = array($user['Nome'], $user['Adm']);

        //redireciona para a página principal
        header("Location: index.php");
    } else {
        //redireciona para o login
        header("Location: login.php");
    }
} else {
    header("Location: login.php");
}
