<?php
//setcookie('nome', 'Adriana Cookie', time()+3600);
include '../todos/functions.php';
include '../todos/header.php';
//Sempre que queremos acessar a sessão temos que começar a sessão
session_start();
//

//display_info($_SESSION, 'Sessão');
//
if (!isset($_SESSION["nome"])) {
    $_SESSION["nome"] = 'Adriana';
    $_SESSION["logado"] = "Não estou logado<br>";
} else {
    $_SESSION["logado"] = "Estou Logado<br>";
}
echo $_SESSION["logado"];


////session_destroy();
//display_info($_SESSION, 'Sessão');

//display_info($_COOKIE, 'Cookie');
//foreach ($_COOKIE as $key => $value){
//    setcookie($key, '', -(time()+3600));
//}
display_info($_COOKIE, 'Cookie');
//$_COOKIE['sobrenome'] = 'Cerdeira';
////$_COOKIE['nome'] = 'Adriana Cookie 2';
//display_info($_COOKIE, 'Cookie 2');


?>
    <p><a href="session_destroy.php">Destruir Sessão</a></p>
<?php

include '../todos/footer.php';
?>