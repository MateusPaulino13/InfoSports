<?php
//inclui a conexão
require_once "conexao.php";

// User comum = 0
// Administrador = 1
// Anunciante = 2
// atleta = 3

//Verifica se ha alguma informação vazia
if (isset($_POST['sub'])) {
    $user = $_POST['user'];
    $password = $_POST['pass'];

    //se ter o user e a senha, se não cai no else
    $login = "SELECT id, name, username, password, email, acesso FROM reg WHERE (username = '$user' OR email='$user') AND password = '$password' 
    UNION ALL SELECT id, name, username, email, password, acesso FROM anunciante WHERE (username = '$user' OR email='$user') AND password = '$password' 
    UNION ALL SELECT id, name, username, email ,password, acesso FROM atleta WHERE (username = '$user' OR email='$user') AND password = '$password'";
    // $login = "SELECT reg.username, reg.password, anunciante.username, anunciante.password, atleta.username, atleta.password FROM reg INNER JOIN anunciante ON reg.username = '$user' AND reg.password = '$password' AND anunciante.username = reg.username AND anunciante.password = reg.password INNER JOIN atleta ON atleta.username = anunciante.username AND atleta.password = anunciante.password;";
    $query = mysqli_query($con, $login);

    //se houser algum registro maior que 0, redirecionará para a home
    if (mysqli_num_rows($query) > 0) {
        $f = mysqli_fetch_assoc($query);

        //cria a sessão com o ID do usuario
        $_SESSION['id'] = $f['id'];
        $_SESSION['nome'] = $f['name'];
        $_SESSION['acesso'] = $f['acesso'];
        $_SESSION['autenticado'] = 1;

        //direciona para a pagina home com os dados do usuário
        header('location: ../pages/home.php');
    } else {
        $_SESSION['autenticado'] = 0;
        header('Location: ../pages/login.php');
        // echo '<p class="text-lowercase text-white">Usuário ou senha não existentes</p>';
    }
}


// //Verifica se há alguma informação vazia
// if (isset($_POST['sub'])) {
//     $user = $_POST['user'];
//     $password = $_POST['pass'];

//     //se ter o user e a senha, se não cai no else
//     $login = "SELECT reg.id, reg.name, reg.username, reg.password, reg.acesso, anunciante.id , anunciante.name, anunciante.username AS anunciante_username, anunciante.password AS anunciante_password, anunciante.acesso AS anunciante_acesso, atleta.id, atleta.name, atleta.username AS atleta_username, atleta.password AS atleta_password, atleta.acesso AS atleta_acesso 
//     FROM reg
//     LEFT JOIN anunciante ON reg.username = anunciante.username AND reg.password = anunciante.password
//     LEFT JOIN atleta ON reg.username = atleta.username AND reg.password = atleta.password
//     WHERE reg.username = '$user' AND reg.password = '$password'";

//     $query = mysqli_query($con, $login);

//     //se houver algum registro maior que 0, redirecionará para a home
//     if (mysqli_num_rows($query) > 0) {
//         $f = mysqli_fetch_assoc($query);

//         // Cria a sessão com os dados do usuário
//         $_SESSION['id'] = $f['id'];
//         $_SESSION['nome'] = $f['name'];

//         // Verifica o nível de acesso
//         if (!empty($f['acesso'])) {
//             $_SESSION['acesso'] = $f['acesso'];
//         } elseif (!empty($f['anunciante_acesso'])) {
//             $_SESSION['acesso'] = $f['acesso'];
//         } elseif (!empty($f['atleta_acesso'])) {
//             $_SESSION['acesso'] = $f['acesso'];
//         } else {
//             $_SESSION['acesso'] = 0; // Acesso padrão
//         }

//         $_SESSION['autenticado'] = 1;

//         //direciona para a página home com os dados do usuário
//         header('location:home.php');
//     } else {
//         header('Location: login.php');
//         // echo '<p class="text-lowercase text-white">Usuário ou senha não existentes</p>';
//     }
// }
