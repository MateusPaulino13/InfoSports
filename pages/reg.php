<?php
require_once '../actions/conexao.php';

if (isset($_POST['sub'])) {
    $nome = $_POST['text'];
    $usuario = $_POST['user'];
    $senha = $_POST['pass'];
    $cidade = $_POST['city'];
    $email = $_POST['email'];

    if ($_FILES['f1']['name']) {
        move_uploaded_file($_FILES['f1']['tmp_name'], "../assets/image/" . $_FILES['f1']['name']); 
        $img = "../assets/image/" . $_FILES['f1']['name'];
    }

    $sql = "SELECT name, username, password from reg WHERE name = '$nome' AND username = '$usuario' AND password = '$senha'";
    $query = mysqli_query($con, $sql);

    // verifica se o usuario já existe
    if (mysqli_num_rows($query) > 0) {
        echo '<div class="alert animate__bounceIn">
                <strong>ATENÇÃO</strong>
                <p>Usuário já existente!</p>
            </div>';
    } else {
        $i = "INSERT INTO reg(name, username, password, email, city, image) VALUES('$nome','$usuario','$senha','$email','$cidade','$img')";

        mysqli_query($con, $i);

        // Send a registration confirmation email
        $to = $email; // The user's email address
        $subject = 'Registration Confirmation'; // Email subject
        $message = 'Thank you for registering with InfoSports. Your account has been successfully created.'; // Email message
        $headers = 'From: your_email@example.com' . "\r\n" .
            'Reply-To: your_email@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        $mailSent = mail($to, $subject, $message, $headers);

        if ($mailSent) {
            echo '<div class="alert animate__bounceIn">
                        <strong>Success</strong>
                        <p>Registration complete. A confirmation email has been sent to your email address.</p>
                    </div>';
        } else {
            echo '<div class="alert animate__bounceIn">
                        <strong>Error</strong>
                        <p>Registration complete, but we were unable to send a confirmation email.</p>
                    </div>';
        }

        header("Location: ../pages/login.php");
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style/reg.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="../assets/js/login.js"></script>
    <title>Cadastro</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <a class="navbar-brand ms-4" href="#">InfoSports</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="reg_anunciante.php">Anunciante</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reg_atleta.php">Atleta</a>
                </li>
            </ul>
            <form class="d-flex">
                <a class="btn btn-success my-2 my-sm-0 text-white" href="login.php" role="button">Login</a>
            </form>
        </div>
    </nav>
    <!-- navbar -->

    <!-- Formulário de registro -->
    <form method="POST" enctype="multipart/form-data">

        <div class="container">
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="text" class="form-label">Nome :</label>
                        <input class="form-control" type="text" name="text" id="text">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="user" class="form-label">Usuário :</label>
                        <input class="form-control" type="text" name="user" id="user">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="pass" class="form-label">Senha :</label>
                        <input class="form-control" type="password" name="pass" id="pass">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email :</label>
                        <input class="form-control" type="email" name="email" id="email">
                    </div>
                </div>

                <div class="col-md-6 mt-3">
                    <label for="city" class="form-label">Cidade :</label>
                    <select name="city" class="form-select">
                        <option selected>Selecione</option>
                        <option value="Hortolandia">Hortolândia</option>
                        <option value="Campinas">Campinas</option>
                        <option value="Sumare">Sumaré</option>
                        <option value="Monte Mor">Monte Mor</option>
                        <option value="Nova Odesa">Nova Odesa</option>
                    </select>
                </div>

                <div class="col-md-6 mt-3">
                    <p class="h5">Imagem de Perfil :</p>
    
                    <div class="mb-3">
                        <input type="file" class="form-control" id="f1" name="f1">
                    </div>
                </div>
            </div>

            <input class="btn btn-outline-primary btn-lg btn-block" type="submit" name="sub" value="Cadastrar">
        </div>
    </form>

</body>

</html>