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
    <?php if ($adm) : ?>
        <table border="2">
            <thead>
                <tr>
                    <td>Nome</td>
                    <td>Email</td>
                    <td>Senha</td>
                    <td>ADM</td>
                    <td>ID</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = $conexao->prepare("SELECT * FROM usuarios");
                $query->execute();

                $users = $query->fetchAll(PDO::FETCH_ASSOC);

                for ($i = 0; $i < sizeof($users); $i++) :
                    $usuarioAtual = $users[$i];
                ?>
                    <tr>
                        <td><?php echo $usuarioAtual['Nome'] ?></td>
                        <td><?php echo $usuarioAtual['Email'] ?></td>
                        <td><?php echo $usuarioAtual['Senha'] ?></td>
                        <td><?php echo $usuarioAtual['Adm'] ?></td>
                        <td><?php echo $usuarioAtual['Id'] ?></td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    <?php endif; ?>
    <button>
        <a href="logout.php">Sair</a>
    </button>
</body>

</html>