<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $mensagem = $_POST["mensagem"];

  $para = "seu-email@example.com"; // Substitua pelo seu endereço de email
  $assunto = "Mensagem do formulário de contato";
  $corpo = "Nome: $nome\nEmail: $email\nMensagem: $mensagem";

  // Envio do email
  mail($para, $assunto, $corpo);

  // Redirecionamento para uma página de confirmação
  header("Location: confirmacao.html");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Página de Contato</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>Entre em Contato</h1>

  <form id="contactForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="mensagem">Mensagem:</label>
    <textarea id="mensagem" name="mensagem" required></textarea><br>

    <input type="submit" value="Enviar">
  </form>

  <script src="script.js"></script>
</body>
</html>
