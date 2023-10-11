<?php
    require_once "conexao.php";

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $deletar = "DELETE FROM evento WHERE id = $id";
        $query = mysqli_query($con, $deletar);
    }
?>