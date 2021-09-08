<?php
include '../todos/functions.php';
include '../todos/header.php';

$atribuicao = 6 / 2;
$a = ($b = 4) + 6;
echo $a, '<br>', $b, '<br>';


$a += $b; //Equivale a $a = $a + $b
echo $a, '<br>';
$a -= $b; //Equivale a $a = $a - $b
echo $a, '<br>';
$a *= $b; //Equivale a $a = $a * $b
echo $a, '<br>';
$a /= $b; //Equivale a $a = $a / $b
echo $a, '<br>';
$a **= $b; //Equivale a $a = $a ** $b
echo $a, '<br>';
$a %= 3; //Equivale a $a = $a % 3
echo $a, '<br>';

$meu_string = 'Olá, ';


$meu_string .= 'como vai?'; //Equivale a $meu_string = $meu_string . 'como vai?'
echo $meu_string, '<br>';


?>


<?php
include '../todos/footer.php';
?>
