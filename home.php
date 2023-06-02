<?php
//inclui a conexão
include "conexao.php";

//seleciona o id
$sessao = "SELECT * FROM reg WHERE id='$_SESSION[id]'";

//prepara pra execução do query e do select
$qu = mysqli_query($con, $sessao);

//retorna em tabelas ao usuario
$f = mysqli_fetch_assoc($qu);
?>
<html>

<head>
  <title>InfoSports - Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style/home.css">
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
          <a class="nav-link" href="#">Campeonatos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Peneiras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Notícias</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <a class="btn btn-danger mr-3 my-2 my-sm-0 text-white" href="logout.php" role="button">Sair</a>
      </form>
    </div>
  </nav>
  <!-- navbar -->

  <!-- usuario padrão -->
  <?php if ($_SESSION['adm'] != 1) : ?>
    <div class="container">
      <h5>Seja bem-vindo(a): <?php echo $_SESSION['nome'] ?></h5>
      <p>Imagem de Perfil: <img style="border-radius: 50%; width: 50px; height:50px" src="<?php echo $f["image"]; ?>"></p>
    </div>
  <?php endif; ?>

  <!-- ADM -->
  <?php if ($_SESSION['adm']) : ?>
    <!-- tabela -->
    <div class="table-wrapper">
      <table class="fl-table">
        <thead>
          <tr>
            <th>Name</th>
            <th>User</th>
            <th>Password</th>
            <th>City</th>
            <th>Gender</th>
            <th>Image</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <?php echo $f["name"]; ?>
            </td>
            <td>
              <?php echo $f["username"]; ?>
            </td>
            <td>
              <?php echo $f["password"] . "<br>"; ?>
            </td>
            <td>
              <?php echo $f["city"] . "<br>"; ?>
            </td>
            <td>
              <?php echo $f["gender"] . "<br>"; ?>
            </td>
            <td>
              <img style="border-radius: 50%; width: 50px; height:50px" src="<?php echo $f["image"]; ?>">
            </td>
          </tr>
        <tbody>
      </table>
    </div>
    <!-- tabela -->
    <!-- Botões -->
    <div class="btns">
      <a href="src/actions/editar.php" class="edit">Editar</a>
      <a href="src/actions/excluir.php" class="del">Deletar</a>
    </div>
    <!-- Botões -->
  <?php endif; ?>

</body>

</html>