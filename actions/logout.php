<?php
require_once "conexao.php";

// destrou a variavel de sessão
session_destroy();

// retorna para pagina login
header("Location: ../pages/login.php");
