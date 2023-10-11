<!DOCTYPE html>
<html>
<head>
    <title>Meu Blog</title>
</head>
<body>
    <h1>Meu Blog</h1>

    <!-- Formulário de Publicação -->
    <form action="blog.php" method="post" enctype="multipart/form-data">
        <label>Título do Post:</label>
        <input type="text" name="titulo" required>

        <label>Conteúdo:</label>
        <textarea name="conteudo" required></textarea>

        <label>Imagem (opcional):</label>
        <input type="file" name="imagem">

        <input type="submit" value="Publicar">
    </form>

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
        $imagem = $_FILES['imagem']['name'];

        // Mova a imagem para um diretório no servidor (opcional)
        if (!empty($imagem)) {
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES['imagem']['name']);
            move_uploaded_file($_FILES['imagem']['tmp_name'], $target_file);
        }

        // Use uma consulta preparada para inserir os dados no banco de dados
        $stmt = $conn->prepare("INSERT INTO posts (titulo, conteudo, imagem) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $titulo, $conteudo, $imagem);

        if ($stmt->execute()) {
            echo "Post publicado com sucesso!";
        } else {
            echo "Erro ao publicar o post: " . $stmt->error;
        }

        // Feche a consulta preparada
        $stmt->close();
    }

    // Feche a conexão com o banco de dados
    $conn->close();
    ?>
</body>
</html>
