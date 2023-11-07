<?php
//função para criar uma sessão
session_start();

//servidor, usuario, senha, nome do banco de dados
$con = mysqli_connect("45.152.44.154", "u451416913_grupo18", "Grupo18@123", "u451416913_grupo18");

// configurando horário brasileiro
$horaBrasil = "SET time_zone = '-03:00'";
$query = mysqli_query($con, $horaBrasil);
