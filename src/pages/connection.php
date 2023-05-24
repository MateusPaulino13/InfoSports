<?php
    // Iniciando a sessão
    session_start();

    // Criando conexão
    $conn = mysqli_connect("localhost", "root", "", "lumany");

    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
?>