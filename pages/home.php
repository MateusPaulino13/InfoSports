<?php
//inclui a conexão
require_once "../actions/conexao.php";

// verifica se esta logado
if (!$_SESSION['autenticado']) {
  header("Location: login.php");
}

//seleciona o id
$sessao = "SELECT * FROM reg WHERE id='$_SESSION[id]'";

//prepara pra execução do query e do select
$query = mysqli_query($con, $sessao);

//retorna em tabelas ao usuario
$f = mysqli_fetch_assoc($query);
?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/style/home.css">
  <title>Home</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="#">Lumany</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="campeonatos.php">Campeonatos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="peneiras.php">Peneiras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Notícias</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <a class="btn btn-danger mr-3 my-2 my-sm-0 text-white" href="../actions/logout.php" role="button">Sair</a>
      </form>
    </div>
  </nav>
  <!-- navbar -->

  <!-- usuario padrão -->
  <?php if ($_SESSION['acesso'] == 0) : ?>
    <div class="container">
      <h4>Seja bem-vindo(a): <?php echo $_SESSION['nome'] ?></h4>
      <p>Imagem de Perfil: <img style="border-radius: 50%; width: 50px; height:50px" src="<?php echo $f["image"]; ?>"></p>
    </div>
  <?php endif; ?>

  <!-- usuario anunciante -->
  <?php if ($_SESSION['acesso'] == 2) : ?>
    <div class="container">
      <h4>Seja bem-vindo(a): <?php echo $_SESSION['nome'] ?></h4>
      <h4>Anunciante</h4>
      <p>Imagem de Perfil: <img style="border-radius: 50%; width: 50px; height:50px" src="<?php echo $f["image"]; ?>"></p>
    </div>
  <?php endif; ?>

  <!-- usuario atleta -->
  <?php if ($_SESSION['acesso'] == 3) : ?>
    <div class="container">
      <h4>Seja bem-vindo(a): <?php echo $_SESSION['nome'] ?></h4>
      <h4>Atleta</h4>
      <p>Imagem de Perfil: <img style="border-radius: 50%; width: 50px; height:50px" src="<?php echo $f["image"]; ?>"></p>
    </div>
  <?php endif; ?>

  <?php if ($_SESSION['acesso'] == 1) : ?>
    <h4>Seja bem-vindo(a): <?php echo $_SESSION['nome'] ?></h5>
      <h5>Administrador</h5>
    <?php endif; ?>

</body>

</html>