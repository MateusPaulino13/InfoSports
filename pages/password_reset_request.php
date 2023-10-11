<?php

require_once '../actions/conexao.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Verifique se o token existe no seu banco de dados e ainda é válido (não expirou)
    // Se for válido, mostre um formulário para o usuário redefinir sua senha

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Valide e sanitize a nova senha
        $novaSenha = $_POST['nova_senha'];

        // Atualize a senha do usuário no seu banco de dados
        // Você deve armazenar a nova senha de forma segura (normalmente com hash)

        // Redirecione o usuário para uma página de login ou forneça uma mensagem de sucesso
        header("Location: login.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Seu formulário HTML para redefinir a senha -->
</head>
<body>
    <form method="POST">
        <label for="nova_senha">Nova Senha:</label>
        <input type="password" name="nova_senha" required>
        <button type="submit">Redefinir Senha</button>
    </form>
</body>
</html>
