<?php
require_once "conexao.php";

if (isset($_GET['submit'])) {
    $nome = $_GET['name'];
    $descricao = $_GET['description'];

    if ($_FILES['img']['name']) {
        move_uploaded_file($_FILES['img']['tmp_name'], "../assets/image/" . $_FILES['img']['name']);
        $img = "../assets/image/" . $_FILES['img']['name'];
    }

    $sql = "SELECT name, description, image FROM evento WHERE name = '$nome'
    AND description = '$descricao' AND image = '$img'";
    $query = mysqli_query($con, $sql);

    // verifica se o campeonato já é existente
    if (mysqli_num_rows($query) > 0) {
        header("Location: ../pages/campeonato.php?campeonato=existe");
    } else {
        $sql = "INSERT INTO evento(`name`, `description`, `image`, `id_anunciante`) 
        VALUES ('$nome', '$descricao', '$img', '{$_SESSION['id']}')";
        mysqli_query($con, $sql);

        header("Location: ../pages/campeonato.php?campeonato=pronto");
    }
}
