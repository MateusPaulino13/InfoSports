<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- bootstrap icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="src/style/index.css" />
    <!-- <link rel="stylesheet" href="style/home.css" /> -->
    <title>InfoSports</title>
  </head>

  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a
          class="navbar-brand ms-5 fs-4 fw-bold"
          style="color: #7ed956"
          href="#"
          >InfoSports</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active fs-5" aria-current="page" href="#"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5" href="#">Campeonatos</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link fs-5"
                href="#"
                id="peneiras"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Peneiras
              </a>
              <!-- <ul class="dropdown-menu" aria-labelledby="peneiras">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul> -->
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5" tabindex="-1">Notícias</a>
            </li>
          </ul>
          <form class="d-flex">
            <button class="btn botao btn-warning me-4 px-3">
              <a
                style="color: #f7f7f7; text-decoration: none"
                href="src/actions/cadastro.php"
                >Registre-se</a
              >
            </button>
            <button
              class="btn-login me-3 px-4"
              style="border: 1px solid #7ed956"
            >
              <a
                style="color: #f7f7f7; text-decoration: none"
                href="src/actions/login.php"
                >Login</a
              >
            </button>
          </form>
        </div>
      </div>
    </nav>
    <!-- navbar -->

    <!-- titulo -->
    <div class="container">
      <div class="row">
        <div class="col">
          <h5 style="color: #7ed956" class="fs-1 fw-bold mt-5 text-center">
            Tudo sobre o mundo dos Esportes
          </h5>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row mt-5">
        <div class="col me-3 text-light bg-dark rounded">
          <!-- imagem card -->
          <div class="text-center m-3">
            <img
              class="rounded"
              style="width: 300px"
              src="https://phantom-marca.unidadeditorial.es/11d580dc7c4e603fa3766baae08c56ba/resize/720/f/webp/assets/multimedia/imagenes/2022/11/25/16694129388697.jpg"
              alt="Imagem peneira"
            />
          </div>
          <!-- titulo e texto -->
          <div class="mb-4">
            <h3 class="ms-4 fs-5 fw-bold">
              Futebol Amador: Vila Boa Vista é campeão da Série Ouro A
            </h3>
            <p class="ms-4 fs-6">
              Decisão contra o Vila Rica foi nos pênaltis; No feminino, União
              São José conquistou a taça ao bater o Damas da Bola
            </p>
          </div>
        </div>
        <div class="col text-light bg-dark rounded">
          <!-- imagem card -->
          <div class="text-center m-3">
            <img
              class="rounded"
              style="width: 300px"
              src="https://www.atletasdobem.com.br/wp-content/uploads/2022/06/as-regras-do-basquete.1200x800.jpg"
              alt="Imagem peneira"
            />
          </div>
          <!-- titulo e texto -->
          <div class="mb-4">
            <h3 class="ms-4 fs-5 fw-bold">
              Paulo Cachoeira é anunciado como novo Diretor de Oficiais
            </h3>
            <p class="mx-4 my-3 fs-6">
              A Liga Desportiva Paulista tem a honra de anunciar o Srº Paulo
              Henrique Cachoeira Martins como novo Diretor de Oficiaist
            </p>
          </div>
        </div>
        <div class="col ms-3 text-light bg-dark rounded">
          <!-- imagem card -->
          <div class="text-center m-3">
            <img
              class="rounded"
              style="width: 300px"
              src="https://conteudo.imguol.com.br/c/esporte/72/2022/09/06/leal-e-um-dos-destaques-no-ataque-da-selecao-brasileira-de-volei-1662493763877_v2_900x506.jpg"
              alt="Imagem peneira"
            />
          </div>
          <!-- titulo e texto -->
          <div class="mb-4">
            <h3 class="ms-4 fs-5 fw-bold">
              Brasil vai jogar em casa o Pré-Olímpico Masculino de Vôlei
            </h3>
            <p class="mx-4 my-3 fs-6 text-wrap">
              A Confederação Brasileira de Vôlei (CBV) conseguiu trazer para o
              Brasil um dos três grupos do Pré-Olímpico Masculino de Vôlei
            </p>
          </div>
        </div>
      </div>

      <hr style="background-color: #7ed956" class="p-1 my-4" />

      <div class="row mt-4">
        <div class="col me-4 text-light bg-dark rounded">
          <div class="text-center m-3">
            <img
              class="rounded"
              style="width: 300px"
              src="https://www.acidadeon.com/__export/1668469607362/sites/acidadeon/img/2022/11/14/peneira202147.jpg_557888218.jpg"
              alt="Imagem peneira"
            />
          </div>
          <!-- titulo e texto -->
          <div class="mb-4">
            <h3 class="ms-4 fs-5 fw-bold">Peneira masculina no Sesi em Jaú</h3>
            <p class="ms-5 fs-6">
              Sesi-Sp está promovendo, na próxima dia 25 de fevereiro, seletivas
              masculinas de vôlei, para atletas nascidos entre 2005 e 2010. Os
              testes abrangerão as cetegorias sub-15, sub-17 e sub-19.
            </p>
          </div>
        </div>
        <div class="col text-light bg-dark rounded">
          <div class="text-center m-3">
            <img
              class="rounded"
              style="width: 200px"
              src="https://static.wixstatic.com/media/711a4c_5336245e760a4af3b20041554df3774a~mv2.png/v1/fill/w_702,h_696,al_c,lg_1,q_90,enc_auto/711a4c_5336245e760a4af3b20041554df3774a~mv2.png"
              alt="Imagem peneira"
            />
          </div>
          <!-- titulo e texto -->
          <div class="mb-4">
            <h3 class="ms-4 fs-5 fw-bold">Basquete 3x3 Limeira</h3>
            <p class="ms-4 fs-6">
              Você menina, que tem entre 13 e 17 anos, gosta de Basquete, e
              gostaria de ter uma oportunidade de conhecer mais ou até se tornar
              atleta da modalidade de Basquete 3x3.
            </p>
          </div>
        </div>
      </div>
    </div>

    <br />

    <div class="container">
      <div class="position-relative">
        <hr
          style="
            background-color: #7ed956;
            width: 30%;
            position: absolute;
            left: 50%;
            transform: translate(-50%);
          "
          class="p-1"
        />
        <hr
          style="
            background-color: #7ed956;
            width: 30%;
            position: absolute;
            left: 0;
          "
          class="p-1"
        />
        <hr
          style="
            background-color: #7ed956;
            width: 30%;
            position: absolute;
            left: 85%;
            transform: translate(-50%);
          "
          class="p-1"
        />
      </div>
    </div>

    <br />
    <br />

    <div class="container text-center my-5">
      <button
        onclick="window.location.href = 'src/actions/cadastro.php'"
        class="saiba_mais_btn"
      >
        Saiba Mais
        <svg
          xmlns="http://www.w3.org/2000/svg"
          style="font-weight: bold; width: 33px"
          fill="currentColor"
          class="bi bi-plus"
          viewBox="0 0 16 16"
        >
          <path
            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"
          />
        </svg>
      </button>
    </div>

    <footer
      class="d-flex flex-wrap bg-dark justify-content-between align-items-center py-3 mt-4 border-top"
    >
      <div class="col-md-4 d-flex align-items-center">
        <a
          href="/"
          class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1"
        >
          <svg class="bi" width="30" height="24">
            <use xlink:href="#bootstrap" />
          </svg>
        </a>
        <span class="text-muted">&copy; 2023 Lumany Innovations</span>
      </div>

      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3 me-2">
          <a class="text-muted" href="#">
            <i class="bi bi-twitter" style="font-size: 30px"></i>
          </a>
        </li>
        <li class="ms-3 me-2">
          <a class="text-muted" href="#"
            ><i style="font-size: 30px" class="bi bi-instagram"></i>
          </a>
        </li>
        <li class="ms-3 me-5">
          <a class="text-muted" href="#">
            <i style="font-size: 30px" class="bi bi-facebook"></i>
          </a>
        </li>
      </ul>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
