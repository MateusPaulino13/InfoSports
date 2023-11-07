<?php
require_once "../../../actions/conexao.php";

if (!$_SESSION['autenticado'] && $_SESSION['acesso'] != 2) {
    header("Location:../index.php");
}

if (isset($_GET['id']) && isset($_GET['tipo'])) {
    $id = $_GET['id'];
    $tipo = $_GET['tipo'];

    $selecao = "SELECT id, name, location, description, image, id_anunciante FROM evento WHERE id = $id AND tipo = $tipo";
    $query = mysqli_query($con, $selecao);
}

$campeonato = mysqli_fetch_assoc($query);

$local = "../../";
$capa = $campeonato['image'];
$local .= $capa;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../assets/style/campeonato.css">
    <title>Inscrição Campeonato</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-sm mt-4">
                    <img src="<?php echo $local ?>" class="mb-3" alt="imagem campeonato">
                    <h4 class="ml-3"><?php echo $campeonato['name'] ?></h4>
                    <p class="ml-3"><?php echo $campeonato['description'] ?></p>
                    <p class="ml-3"><?php echo $campeonato['location'] ?></p>
                    <a href="../../../actions/confirma_inscricao.php?id=<?php echo $campeonato['id'] ?> &anunciante=<?php echo $campeonato['id_anunciante'] ?>" class="btn btn-success btn-lg m-3">Inscrever-se</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>