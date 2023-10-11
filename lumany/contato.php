<<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lumany</title>
    <!-- styles -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700"
    />
    <!-- icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"
    />
    <link rel="stylesheet" href="style/lumany.css" />
  </head>

  <body>
    <div>
      <div class="header-blue">
        <nav
          class="navbar navbar-dark navbar-expand-md navigation-clean-search"
        >
          <div class="container">
            <img src="images/logo.png" alt="Logo" />
            <a
              class="navbar-brand"
              style="font-family: lumany"
              href="index.html"
              >Lumany</a
            >
            <button
              class="navbar-toggler"
              data-toggle="collapse"
              data-target="#navcol-1"
            >
              <span class="sr-only">Toggle navigation</span
              ><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
              <ul class="nav navbar-nav">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" href="#">Sobre nós</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" href="contato.html">Contato</a>
                </li>
                <li class="dropdown">
                  <a
                    class="dropdown-toggle nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    aria-expanded="false"
                    href="#"
                    >Serviços
                  </a>
                  <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" role="presentation" href="#info"
                      >InfoSports</a
                    ><a
                      class="dropdown-item"
                      role="presentation"
                      href="#facility"
                      >Facility Van</a
                    ><a class="dropdown-item" role="presentation" href="#clean"
                      >CleanSea</a
                    >
                  </div>
                </li>
              </ul>
              <form class="form-inline mr-auto" target="_self">
                <div class="form-group">
                  <label for="search-field"><i class="fa fa-search"></i></label
                  ><input
                    class="form-control search-field"
                    type="search"
                    name="search"
                    id="search-field"
                  />
                </div>
              </form>
              <span class="navbar-text">
                <a href="#" class="login">Login</a></span
              ><a class="btn btn-light action-button" role="button" href="#"
                >Cadastrar-se</a
              >
            </div>
          </div>
        </nav>
      </div>
    </div>

    <div class="contact-clean">
      <form method="post">
        <h2 class="text-center">Entre em contato</h2>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST["name"];
            $email = $_POST["email"];
            $mensagem = $_POST["message"];
            
            // Verificar se o nome e o email não estão vazios
            if (!empty($nome) && !empty($email)) {
                $assunto = "Mensagem de contato de $nome";
                $para = "contato.lumany@gmail.com, $email";
                $corpo = "Nome: $nome\n";
                $corpo .= "Email: $email\n";
                $corpo .= "Mensagem:\n $mensagem";
            
                if (mail($para, $assunto, $corpo)) {
                    echo "<p class='text-success'>Sua mensagem foi enviada com sucesso!</p>";
                } else {
                    echo "<p class='text-danger'>Desculpe, houve um erro ao enviar a mensagem.</p>";
                }
            } else {
                echo "<p class='text-danger'>Por favor, preencha todos os campos obrigatórios (Nome e Email).</p>";
            }
        }
?>


        <div class="form-group">
          <input
            class="form-control"
            type="text"
            name="name"
            placeholder="Nome"
          />
        </div>
        <div class="form-group">
          <input
            class="form-control"
            type="email"
            name="email"
            placeholder="Email"
          />
        </div>
        <div class="form-group">
          <textarea
            class="form-control"
            rows="14"
            name="message"
            placeholder="Mensagem"
          ></textarea>
        </div>
        <div class="form-group">
          <button class="btn btn-primary" type="submit">Enviar mensagem</button>
        </div>
      </form>
    </div>

    <div class="footer-dark">
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-3 item">
              <h3>Serviços</h3>
              <ul>
                <li><a href="#">Design</a></li>
                <li><a href="#">Desenvolvimento</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-3 item">
              <h3>Sobre</h3>
              <ul>
                <li><a href="#">Compania</a></li>
                <li><a href="#">Time</a></li>
              </ul>
            </div>
            <div class="col-md-6 item text">
              <h3>Lumany</h3>
              <p>
                Surgimos da vontade de mudar a realidade com inovações do
                futuro.
              </p>
            </div>
            <div class="col item social">
              <a href="#"><i class="icon ion-social-facebook"></i></a
              ><a href="#"><i class="icon ion-social-twitter"></i></a
              ><a href="#"><i class="icon ion-social-instagram"></i></a>
            </div>
          </div>
          <p class="copyright">
            Lumany Innovations ©
            <script>
              let a = new Date();
              document.write(a.getFullYear());
            </script>
          </p>
        </div>
      </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
