<?php
// Inclua as classes PHPMailer no início do arquivo
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Conexão com o banco de dados
    $conn = new mysqli('localhost', 'root', '', 'tarefas');

    // Verifique se o email existe
    $result = $conn->query("SELECT * FROM usuarios WHERE email = '$email'");
    if ($result->num_rows > 0) {
        // Gere um token e armazene-o com um tempo de expiração
        $token = bin2hex(random_bytes(50));
        $expiry = date('Y-m-d H:i:s', strtotime('+1 hour'));
        $conn->query("UPDATE usuarios SET reset_token = '$token', reset_token_expiry = '$expiry' WHERE email = '$email'");

        // Envie um e-mail com o link de redefinição usando PHPMailer
        $resetLink = "http://localhost/sisttarefas/redefinir_senha.php?token=$token";

        $mail = new PHPMailer(true);

        try {
            // Configurações do servidor
            //$mail->SMTPDebug = 2;
            $mail->SMTPDebug = 0;                                  
            $mail->isSMTP();                                      
            $mail->Host       = 'smtp.gmail.com';                 
            $mail->SMTPAuth   = true;                             
            $mail->Username   = 'fabiannoasouza@gmail.com';  // Seu endereço de e-mail
            $mail->Password   = 'pbpv zono vief hjsn'; // Senha do aplicativo que você gerou                       
            $mail->SMTPSecure = 'tls';                            
            $mail->Port       = 587; 
            
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            // Destinatários
            $mail->setFrom('fabiannoasouza@gmail.com', 'Fabiano');
            $mail->addAddress($email, 'Nome do Destinatário');     

            // Conteúdo
            $mail->isHTML(true);                                  
            $mail->Subject = 'Redefinição de Senha';
            $mail->Body    = "Clique aqui para redefinir sua senha: $resetLink";

            $mail->send();
            echo 'Mensagem enviada com sucesso';
        } catch (Exception $e) {
            echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
    <title>Solicitar Recuperação</title>
</head>
<body>

<div class="faixa"></div>
<nav>
    <ul>
        <li><a href="index.php"><i class="fas fa-home"></i>Home</a></li>
    </ul>
</nav>

<div class="login-container">
    <div class="login-form">
        <h2>Solicitar Recuperação</h2>        
        <form action="solicitar_recuperacao.php" method="post">
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <input type="submit" value="Solicitar Recuperação">
            </div>
        </form>
        <p>Lembrou da senha? <a href="login.php">Voltar para o login</a></p>
    </div>
</div>

</body>
</html>
