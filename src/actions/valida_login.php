<?php
//inclui a conexão
require_once 'connection.php';

//Verifica se ha alguma informação vazia 
if (isset($_POST['sub'])) {
    $user = $_POST['user'];
    $password = $_POST['pass'];

    //se ter o user e a senha, se não cai no else
    $login = "SELECT * FROM reg WHERE username = '$user' AND password = '$password'";
    $qu = mysqli_query($con, $login);

    //se houser algum registro maior que 0, redirecionará para a home
    if (mysqli_num_rows($qu) > 0) {
        $f = mysqli_fetch_assoc($qu);

        //cria a sessão com o ID do usuario
        $_SESSION['id'] = $f['id'];
        $_SESSION['nome'] = $f['name'];
        $_SESSION['adm'] = $f['adm'];

        //direciona para a pagina home com os dados do usuário
        header('location:../../home.php');
    } else {
        echo '<p class="text-lowercase text-white">Usuário ou senha não existentes</p>';
    }
}
