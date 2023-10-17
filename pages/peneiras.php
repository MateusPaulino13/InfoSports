<?php
    require_once "../actions/conexao.php";

    if (!$_SESSION['autenticado']) {
        header("Location:../index.php");
    }
    
    $selection = "SELECT * from evento WHERE tipo = 2";
    $query = mysqli_query($con, $selection);
    $peneira = mysqli_fetch_all($query);
?>
<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <title>Peneiras - InfoSports</title>
        </head>
        <body>
            <?php if ($_SESSION['acesso'] == 2): ?>
                <a href="areas/eventos/peneira.php">Administrar peneiras</a>

                <?php if (isset($_GET['campeonato']) && $_GET['campeonato'] == 'existe'): ?>
                    <h1 class="display-1">peneiras já existente</h1>
                <?php endif; ?>

                <?php if (isset($_GET['campeonato']) && $_GET['campeonato'] == 'pronto'): ?>
                    <h1 class="display-1">peneiras adicioando com sucesso</h1>
                <?php endif; ?>
            <?php endif; ?>

            <div class="container">
                <div class="row">
                    <?php for ($i = 0; $i <= count($peneira) - 1; $i++): ?>
                        <div class="col-md-4">
                            <div class="card shadow-sm">
                                <img src="<?php echo $peneira[$i][3]; ?>" alt="imagem peneira">
                                <h4><?php echo $peneira[$i][1]; ?></h4>
                                <p><?php echo $peneira[$i][2]; ?></h4>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </body>
    </html>