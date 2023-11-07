<?php
if ($_SESSION['acesso'] == 0 || $_SESSION['acesso'] == 1) {
    $user = "SELECT * FROM reg WHERE id='{$_SESSION['id']}'";
} else if ($_SESSION['acesso'] == 2) {
    $user = "SELECT * FROM anunciante WHERE id='{$_SESSION['id']}'";
} else if ($_SESSION['acesso'] == 2) {
    $user = "SELECT * FROM atleta WHERE id='{$_SESSION['id']}'";
}

$query = mysqli_query($con, $user);

$f = mysqli_fetch_assoc($query);
?>
<link rel="stylesheet" href="../assets/style/index.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand ms-5 fs-4 fw-bold" style="color: #7ed956" href="#">InfoSports</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active fs-5" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="campeonatos.php">Campeonatos</a>
                </li>
                <li class="nav-item dropdown">
                    <a style="cursor: pointer;" class="nav-link fs-5" href="peneiras.php">Peneiras</a>
                </li>
                <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link fs-5" href="noticias.php">Notícias</a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <img class="nav-link img-fluid custom-image" src="<?php echo $f['image']; ?>" style="border-radius: 50%; width: 60px; height: 60px;">
                </li>
            </ul>
            <form class="d-flex">
                <a class="btn btn-danger mr-3 my-2 my-sm-0 text-white" href="../actions/logout.php" role="button">Sair</a>

            </form>
        </div>
    </div>
</nav>