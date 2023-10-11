<?php
require_once 'conexao.php';

// verifica se o usuario é administrador
if (!$_SESSION['acesso']) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viewall - <?php echo $_SESSION['nome'] ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/home.css">
</head>

<body>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>User</th>
                    <th>Password</th>
                    <th>City</th>
                    <th>Gender</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM reg";
                $query = mysqli_query($con, $sql);

                while ($f = mysqli_fetch_assoc($query)) : ?>
                    <!-- tabela -->
                    <tr>
                        <td>
                            <?php echo $f["name"]; ?>
                        </td>
                        <td>
                            <?php echo $f["username"]; ?>
                        </td>
                        <td>
                            <?php echo $f["password"] . "<br>"; ?>
                        </td>
                        <td>
                            <?php echo $f["city"] . "<br>"; ?>
                        </td>
                        <td>
                            <?php echo $f["gender"] . "<br>"; ?>
                        </td>
                        <td>
                            <img style="border-radius: 50%; width: 50px; height:50px" src="<?php echo $f["image"]; ?>">
                        </td>
                    </tr>

                <?php endwhile; ?>

            </tbody>
        </table>
    </div>
</body>

</html>