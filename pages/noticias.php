<?php
    require_once "../actions/conexao.php";

    $selection = "SELECT * from posts";
    $query = mysqli_query($con, $selection);
    $noticia = mysqli_fetch_all($query);

    // echo "<pre>";
    // print_r($noticia);
    // echo "</pre>";
?>

<!DOCTYPE html>
    <html lang="pt-br">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../../../assets/style/campeonato.css">
            <title>Noticias</title>
        </head>
        <body>
            <div class="container mt-3">
                <div class="row">
                    <?php for ($i = 0; $i <= count($noticia) / 2; $i++): ?>
                        <div class="col-md-4 mt-3">
                            <div class="card shadow-sm">
                                <h2><?php echo $noticia[$i][1]; ?></h2>
                                <h4><?php echo $noticia[$i][2]; ?></h4>
                                <p><?php echo $noticia[$i][3]; ?></h4>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </body>
    </html>