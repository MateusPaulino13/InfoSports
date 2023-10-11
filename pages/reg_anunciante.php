<?php

require_once "../actions/conexao.php";

if (isset($_POST['submit'])) {
    $nome = $_POST['name'];
    $usuario = $_POST['user'];
    $senha = $_POST['password'];
    $endereco = $_POST['address'];
    $cpf = $_POST['cpf'];

    $query = "SELECT name, username, password, address, cpf FROM anunciante
    WHERE name='$nome' AND username='$usuario' AND password='$senha' 
    AND address='$endereco' AND cpf='$cpf'";

    $resultado = mysqli_query($con, $query);

    // verifica se já há registros das inputs
    if (mysqli_num_rows($resultado) > 0) {
        $_SESSION['reg'] = 0;
        echo '<div class="alert animate__bounceIn">
                <strong>ATENÇÃO</strong>
                <p>Usuário já existente!</p>
            </div>';
    } else {
        $query = "INSERT INTO anunciante(name, username, password, address, cpf) VALUES('$nome', '$usuario', '$senha', '$endereco', '$cpf')";
        mysqli_query($con, $query);
        header("Location: login.php");
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <!-- animations css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="assets/style/index.css">
    <title>Registro Anunciante - InfoSports</title>
</head>

<body>
    <!-- Navbar -->
    <?php require "../include/navbar.php"; ?>

    <form method="post" enctype="multipart/form-data">
        <label for="name">Nome :</label>
        <input name="name" type="text" required>

        <br>

        <label for="user">Usuário :</label>
        <input name="user" type="text" required>

        <br>

        <label for="password">Senha :</label>
        <input name="password" type="password" required>

        <br>

        <label for="address">Endereço :</label>
        <input name="address" type="text" required>

        <br>

        <label for="cpf">CPF :</label>
        <input name="cpf" type="text" required>

        <input type="submit" name="submit" value="Cadastrar">
    </form>

    <!-- Footer -->
    <!-- <?php require "../include/rodape.php"; ?> -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>