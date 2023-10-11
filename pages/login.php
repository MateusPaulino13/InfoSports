<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style/login.css">
</head>

<body>
    <!-- <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="login.php">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="reg.php">Cadastrar-se</a>
        </li>
    </ul> -->

    <!-- Formulário de Login -->
    <div class="login">
        <h1>Login</h1>
        <form method="POST" action="../actions/valida_login.php">
            <input type="text" name="user" placeholder="Usuário" required="required" />
            <input type="password" name="pass" placeholder="Senha" required="required" />
            <input type="submit" name="sub" value="Login" class="btn btn-primary btn-block btn-large">
        </form>
        <a style="color:#f7f7f7;text-decoration:none" href="reg.php">Cadastre-se já</a>
    </div>
    <!-- Formulário de Login -->
</body>

</html>