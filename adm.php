<?php
require_once 'connect.php';

if (isset($_SESSION['usuario']) && is_array($_SESSION['usuario'])) {
    $adm = $_SESSION['usuario'][1];
    $nome = $_SESSION['usuario'][0];
} else {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-Vindo <?php echo $nome; ?></title>
</head>

<body>
    <button>
        <a href="logout.php">Sair</a>
    </button>
</body>

</html>