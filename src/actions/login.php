<html>

<head>
    <meta charset="UTF-8">
    <title>InfoSports - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/login.css">
</head>

<body>
    <!-- Formulário de Login -->
    <div class="login">
        <h1>Login</h1>
        <form method="POST" action="valida_login.php">
            <input type="text" name="user" placeholder="Usuário" required="required" />
            <input type="password" name="pass" placeholder="Senha" required="required" />
            <input type="submit" name="sub" value="Login" class="btn btn-primary btn-block btn-large">
        </form>
        <a style="color:#f7f7f7;text-decoration:none" href="cadastro.php">Cadastre-se já</a>
    </div>
    <!-- Formulário de Login -->
</body>

</html>