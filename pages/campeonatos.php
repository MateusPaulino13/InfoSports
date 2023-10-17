<?php
require_once "../actions/conexao.php";

if (!$_SESSION['autenticado']) {
    header("Location:../index.php");
}

$selection = "SELECT * from evento WHERE tipo = 1";
$query = mysqli_query($con, $selection);
$campeonato = mysqli_fetch_all($query);

// echo "<pre>";
// print_r($_GET);
// echo "</pre>";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style/campeonato.css">
    <title>Campeonatos - InfoSports</title>
</head>

<body>
    <?php if ($_SESSION['acesso'] == 2) : ?>
        <a href="areas/eventos/campeonato.php">Administrar campeonatos</a>

        <?php if (isset($_GET['campeonato']) && $_GET['campeonato'] == 'existe') : ?>
            <h1 class="display-1">Campeonato já existente</h1>
        <?php endif; ?>

        <?php if (isset($_GET['campeonato']) && $_GET['campeonato'] == 'pronto') : ?>
            <h1 class="display-1">Campeonato adicioando com sucesso</h1>
        <?php endif; ?>
    <?php endif; ?>

    <div class="container mt-3">
        <div class="row">
            <?php for($i = 0; $i <= count($campeonato) - 1; $i++) : ?>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="<?php echo $campeonato[$i][3] ?>" alt="imagem campeonato">
                        <h4 class="ml-3"><?php echo $campeonato[$i][1] ?></h4>
                        <p class="ml-3"><?php echo $campeonato[$i][2] ?></h4>
                        <p class="ml-3"><a href="areas/eventos/inscricao.php?id=<?php echo $campeonato[$i][0]?>&tipo=1" class="btn btn-success">Inscrição</a></p>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="../assets/js/campeonato.js"></script>
</body>

</html>