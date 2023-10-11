<?php
    require_once "../../../actions/conexao.php";

    if (!$_SESSION['autenticado'] && $_SESSION['acesso'] != 2) {
        header("Location:../index.php");
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
            <title>Peneiras</title>
        </head>
        <body>
            <button id="myBtn">Nova Peneira</button>

            <!-- Modal -->
            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>

                    <form method="POST" action="../../../actions/regPeneira.php" enctype="multipart/form-data">
                        <label for="name">Nome da Peneira</label>
                        <input required type="text" name="name">

                        <br>

                        <label for="description">Descrição</label>
                        <textarea required rows="1" cols="30" type="text" name="description"></textarea>

                        <br>

                        <label for="location">Localização</label>
                        <input type="text" name="location" id="location">

                        <br>

                        <input required type="file" id="img" name="img" id="imgPeneira">

                        <br>
                        <input required name="submit" type="submit" value="Registrar">
                    </form>
                </div>

            </div>

            

            <div class="container">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Localização</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Imagem</th>
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $peneira = "SELECT id, name, location, description, image, tipo from evento WHERE id_anunciante = {$_SESSION['id']} AND tipo = 2";
                        $query = mysqli_query($con, $peneira);

                        if (mysqli_num_rows($query) > 0) {
                            while ($data = mysqli_fetch_assoc($query)) {
                                echo "<tr>";
                                echo "<td>{$data['name']}</td>";
                                echo "<td>{$data['location']}</td>";
                                echo "<td>{$data['description']}</td>";
                                echo "<td>{$data['image']}</td>";
                                echo '<td><a class="btn btn-danger mr-2" href="peneira.php?id=' .
                                    $data["id"] .
                                    '">Excluir</a>
                                <a class="btn btn-secondary ml-2" href="editar_peneira.php?id=' .
                                    $data["id"] .
                                    '">Editar</a></td>';
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>Nenhum registro encontrado</td></tr>";
                        }

                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];

                            $deletar = "DELETE FROM evento WHERE id = $id";
                            $query = mysqli_query($con, $deletar);
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            <script src="../../../assets/js/campeonato.js"></script>
        </body>
</html>