<?php

require_once '../actions/conexao.php';


// Verifique se o formulário de solicitação de redefinição de senha foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Valide e sanitize o endereço de e-mail do usuário
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Verifique se o e-mail existe no seu banco de dados (você deve ter uma conexão com o banco de dados)
    // Se ele existir, gere um token exclusivo e armazene-o no banco de dados junto com o e-mail do usuário
    // Envie um e-mail para o usuário com um link para redefinir a senha, incluindo o token
    // O link pode se parecer com: password_reset.php?token=seu_token_exclusivo_aqui
    // Você pode usar uma biblioteca como o PHPMailer para enviar e-mails

    // Redirecione o usuário para uma página de confirmação
    header("Location: resetsenha.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Seu formulário HTML para solicitar a redefinição de senha -->
</head>
<body>
    <form method="POST" action="password_reset_request.php">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <button type="submit">Redefinir Senha</button>
    </form>
</body>
</html>
