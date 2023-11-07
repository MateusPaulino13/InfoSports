<?php
require_once "conexao.php";

if (isset($_POST['submit'])) {
    $titulo = mysqli_real_escape_string($con, $_POST['titulo']);
    $conteudo = mysqli_real_escape_string($con, $_POST['conteudo']);
    
    $img = "";

    if ($_FILES['img']['name']) {
        move_uploaded_file($_FILES['img']['tmp_name'], "../image/" . $_FILES['img']['name']);
        $img = "../image/" . $_FILES['img']['name'];
    }

    $sql = "SELECT * FROM posts WHERE titulo = '$titulo' AND conteudo = '$conteudo'";
    $query = mysqli_query($con, $sql);

    if (mysqli_num_rows($query) > 0) {
        header("Location: ../pages/areas/eventos/noticia.php?noticia=existe");
    } else {
        $sql = "INSERT INTO posts(`titulo`, `conteudo`, `image`, `data_publicacao`) 
            VALUES ('$titulo', '$conteudo', '$img', now())";
        mysqli_query($con, $sql);

        header("Location: ../pages/areas/eventos/noticia.php?campeonato=pronto");
    }
}
?>
