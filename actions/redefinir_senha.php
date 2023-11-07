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