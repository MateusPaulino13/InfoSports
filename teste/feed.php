<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


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

// Consulta SQL para buscar os posts em ordem decrescente de data de publicação
$sql = "SELECT * FROM posts ORDER BY data_publicacao DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<h2>" . $row["titulo"] . "</h2>";
        echo "<p>" . $row["conteudo"] . "</p>";
        echo "<p>Data de Publicação: " . $row["data_publicacao"] . "</p>";
        echo "<hr>";
    }
} else {
    echo "Nenhum post disponível.";
}

// Feche a conexão com o banco de dados
$conn->close();
?>
