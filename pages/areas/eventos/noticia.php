<?php 
    require_once "../../../actions/conexao.php";

    if (!$_SESSION['autenticado']) {
        header("Location:../login.php");
    }
?>
<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <link rel="stylesheet" href="../../../assets/style/campeonato.css">
            <title>Notícias</title>
        </head>
        <body>
            <form method="POST" action="../../../actions/regNoticia.php" enctype="multipart/form-data">
                <label for="name">Título</label>
                <input required type="text" name="titulo">

                <br>

                <label for="conteudo">Conteudo</label>
                <textarea required rows="1" cols="30" type="text" name="conteudo"></textarea>

                <br>

                <input required type="file" name="img" id="img">

                <br>
                <input required name="submit" type="submit" value="Registrar">
            </form>

            <!-- <div class="container mt-3">
                <form method="POST" action="../../../actions/regNoticia.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="titulo">Título da notícia</label>
                        <input type="text" required name="titulo" class="form-control" id="titulo" aria-describedby="titulo">
                    </div>
                    <div class="form-group">
                        <label for="conteudo">Conteúdo</label>
                        <textarea required name="conteudo" class="form-control" id="conteudo"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="img">Imagem</label>
                        <input type="file" name="img" class="form-control-file" id="img">
                    </div>
                    <input type="submit" value="Enviar" class="btn btn-block btn-primary">
                </form>
            </div> -->
        </body>
</html>