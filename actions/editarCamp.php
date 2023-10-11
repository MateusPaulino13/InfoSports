<?php
require_once "conexao.php";

if (!isset($_SESSION['autenticado']) || $_SESSION['acesso'] != 2) {
    header("Location: ../index.php");
    exit();  // Certifique-se de encerrar a execução após redirecionar
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $selecao = "SELECT id, name, location, description, image FROM evento WHERE id = ?";
    $stmt = mysqli_prepare($con, $selecao);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    $query = mysqli_stmt_get_result($stmt);

    $campeonato = mysqli_fetch_assoc($query);
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $location = $_POST['location'];
    $description = $_POST['description'];

    if ($_FILES['img']['name']) {
        move_uploaded_file($_FILES['img']['tmp_name'], "../assets/image/" . $_FILES['img']['name']);
        $img = "../assets/image/" . $_FILES['img']['name'];
    } else {
        $img = $_POST['img1'];
    }

    $update = "UPDATE evento SET name=?, location=?, description=?, image=? WHERE id=? AND id_anunciante=?";
    $stmt = mysqli_prepare($con, $update);
    mysqli_stmt_bind_param($stmt, "sssiii", $name, $location, $description, $img, $campeonato['id'], $_SESSION['id']);
    mysqli_stmt_execute($stmt);

    header("Location: ../pages/areas/eventos/campeonato.php");
    // exit();  // Certifique-se de encerrar a execução após redirecionar
}
?>
