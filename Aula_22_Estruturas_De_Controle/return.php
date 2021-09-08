<?php
include '../todos/functions.php';
include '../todos/header.php';

echo 'Ante de incluir meu arquivo<br>';
//include 'for_return.php';
$teste = include 'for_return.php';
echo $teste;
echo 'Depois incluir meu arquivo<br>';
?>


<?php
include '../todos/footer.php';
?>
