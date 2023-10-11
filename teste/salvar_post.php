<?php
// Conexão com o banco de dados (substitua com suas configurações)
$servername = "45.152.44.154";
$username = "u451416913_grupo18";
$password = "Grupo18@123";
$dbname = "u451416913_grupo18";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Processamento do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];

    // Insira os dados no banco de dados
    $sql = "INSERT INTO posts (titulo, conteudo) VALUES ('$titulo', '$conteudo')";

    if ($conn->query($sql) === TRUE) {
        echo "Post publicado com sucesso!";
    } else {
        echo "Erro ao publicar o post: " . $conn->error;
    }
}

// Feche a conexão com o banco de dados
$conn->close();
?>
