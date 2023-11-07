<?php
    require_once "../actions/conexao.php";

    $selection = "SELECT * from posts";
    $query = mysqli_query($con, $selection);
    $noticia = mysqli_fetch_all($query);

    // Seleciona todas as postagens da tabela "posts"
    $selection = "SELECT * from posts";
    $query = mysqli_query($con, $selection);
    $noticias = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="../../../assets/style/campeonato.css">
            <link rel="stylesheet" href="../assets/style/index.css" />
            <title>Notícias</title>
        </head>
        <body>
            <!-- navbar -->
            <?php require "../include/navbar2.php"; ?>
            </nav>
            <!-- navbar -->

            <?php if($_SESSION['autenticado']): ?>
                <a href="areas/eventos/noticia.php">Criar uma notícia</a>
            <?php endif; ?> 

            <div class="container">
                <div class="row">
                    <?php foreach ($noticias as $noticia): ?>
                        <div class="col-md-4 mt-3">
                            <div class="card shadow-sm">
                                <img src="<?php echo $noticia['image'] ?>" style="height:10rem;" alt="imagem noticia">
                                <h2><?php echo $noticia['titulo']; ?></h2>
                                <p><?php echo $noticia['conteudo']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </body>
    </html>