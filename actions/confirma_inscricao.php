<?php
    require_once "conexao.php";

    if (!$_SESSION['autenticado'] && $_SESSION['acesso'] != 2) {
        header("Location:../index.php");
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $anunciante = $_GET['anunciante'];

        $selecao = "SELECT id, name, location, description, image, id_anunciante FROM evento WHERE id = $id AND id_anunciante = $anunciante";
        $query = mysqli_query($con, $selecao);
    }

    $campeonato = mysqli_fetch_assoc($query);

    $selecao = "SELECT * FROM inscricao WHERE eventoId = '$id' AND atletaId = '{$_SESSION['id']}'";
    $query = mysqli_query($con, $selecao);

    if(mysqli_num_rows($query) > 0){
        header("Location: ../pages/campeonatos.php?inscricao=existe");
    } else {
        $insert = "INSERT INTO inscricao(eventoId, atletaId) VALUES('$id', '{$_SESSION['id']}')";
        mysqli_query($con, $insert);

        header("Location: ../pages/campeonatos.php?inscricao=feita");
    }
?>