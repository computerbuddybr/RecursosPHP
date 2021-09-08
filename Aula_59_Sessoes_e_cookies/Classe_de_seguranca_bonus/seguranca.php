<?php
include '../todos/functions.php';
include '../todos/header.php';
include 'DBConnect.php';
//session_id('brlgdla0vql9qg2s1qnbmts40k');
session_start();
display_info($_SESSION, 'Sessão');
display_info($_COOKIE, 'Cookie');
//$session_id = session_id();
//echo "<br> Session ID: " . $session_id;
//echo "<br> User Agent: " . $_SERVER['HTTP_USER_AGENT'];

$primeiroAcesso = new Acesso();


if (isset($_SESSION['contador'])) {
    $_SESSION['contador'] = $_SESSION['contador'] + 1;
    echo '<br>Contador do Session: ' . $_SESSION['contador'];
} else {
    $_SESSION['contador'] = 1;
}
$primeiroAcesso->mostrar_contador();


?>


<?php
include '../todos/footer.php';
?>