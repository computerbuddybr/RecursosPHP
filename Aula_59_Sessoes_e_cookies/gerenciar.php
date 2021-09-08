<?php
include '../todos/functions.php';
include '../todos/header.php';
//setcookie('nome', 'Adriana Cookie', time()+3600);
session_id('68o6uhgkhqs80611cb7ejadmsh');
session_start();
//display_info($_SESSION, 'Sessão');
display_info($_COOKIE, 'Cookie');
echo "<br> Session ID: " . session_id();

//$_SESSION["nome"] = "Adriana";
//$_SESSION["sobrenome"] = "Cerdeira";
display_info($_SESSION, 'Sessão');

//Com o Server User Agent vc pode, por exemplo, descobrir o Sistema Operacional e navegador que a pessoa usou para acessar e se não bater com o que você tinha salvo da primeira vez, vc desautoriza a sessão
echo "<br> User Agent: " . $_SERVER['HTTP_USER_AGENT'];
echo "<br> User IP: " . $_SERVER['REMOTE_ADDR'];


//Verificando se existe o contador e se existir somar 1 e se não setar para 1
$_SESSION['contador'] = $_SESSION['contador'] ? $_SESSION['contador'] + 1 : 1;
echo '<br>Contador: ' . $_SESSION['contador'];


?>


<?php
include '../todos/footer.php';
?>