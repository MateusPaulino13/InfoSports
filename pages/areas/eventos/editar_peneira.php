<?php
    require_once "../../../actions/conexao.php";

    if (!$_SESSION['autenticado'] && $_SESSION['acesso'] != 2) {
        header("Location:../index.php");
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $selecao = "SELECT id, name, location, description, image FROM evento WHERE id = $id";
        $query = mysqli_query($con, $selecao);
    }

    $peneira = mysqli_fetch_assoc($query);

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $location = $_POST['location'];
        $description = $_POST['description'];

        if ($_FILES['img']['name']) {
            move_uploaded_file($_FILES['img']['tmp_name'], "../../../assets/image/" . $_FILES['img']['name']);
            $img = "../../../assets/image/" . $_FILES['img']['name'];
        }

        $update = "UPDATE evento SET name='$name', location='$location', description='$description', image='$img' WHERE id='{$id}' AND id_anunciante='{$_SESSION["id"]}'";

        mysqli_query($con, $update);
        header("Location: peneira.php");
    }

?>

<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Editar peneira</title>
        </head>
        <body>
            <form method="POST" enctype="multipart/form-data">
                <input type="text" placeholder="<?php echo $peneira['name'] ?>" name="name" id="name">

                <br>

                <input type="text" placeholder="<?php echo $peneira['location'] ?>" name="location">

                <br>

                <textarea rows="2" cols="30" placeholder="<?php echo $peneira['description'] ?>" type="text" name="description"></textarea>

                <br>

                <input type="file" id="img" name="img">

                <br>
            
                <input type="submit" name="submit" value="Enviar">
            </form>
        </body>
    </html>