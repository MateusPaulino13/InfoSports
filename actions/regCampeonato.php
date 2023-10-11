<?php
require_once "conexao.php";

if (isset($_POST['submit'])) {
    $nome = $_POST['name'];
    $descricao = $_POST['description'];
    $location = $_POST['location'];

    if ($_FILES['img']['name']) {
        move_uploaded_file($_FILES['img']['tmp_name'], "../assets/image/" . $_FILES['img']['name']);
        $img = "../assets/image/" . $_FILES['img']['name'];
    }

    $sql = "SELECT id, name, location ,description, image FROM evento WHERE name = '$nome' AND description = '$descricao' AND image = '$img' AND tipo = 1";
    $query = mysqli_query($con, $sql);

    // verifica se o campeonato já é existente
    if (mysqli_num_rows($query) > 0) {
        header("Location: ../pages/campeonatos.php?campeonato=existe");
    } else {
        $sql = "INSERT INTO evento(`name`, `location` ,`description`, `image`, `tipo`,`id_anunciante`) 
        VALUES ('$nome', '$location' ,'$descricao', '$img', 1,'{$_SESSION['id']}')";
        mysqli_query($con, $sql);

        header("Location: ../pages/campeonatos.php?campeonato=pronto");
    }
}
