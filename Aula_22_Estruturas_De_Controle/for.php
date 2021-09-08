<?php
include '../todos/functions.php';
include '../todos/header.php';

//for ($i  = 1; $i <= 10; $i++){
//    echo $i . '<br>';
//}
//echo '<br>Fora do loop<br>';
//echo $i . '<br>';
//
//echo '<br>Novo loop<br>';

//for (; $i <= 20;$i++){
//    echo $i . '<br>';
//
//}


//Em um array
$meu_arr = ['Adriana', 'Paula', 'Max', 'Juliana', 'Marcos'];
//for($i = 0 ; $i < 5; $i++){
//    echo 'Olá ' . $meu_arr[$i] . '<br>';
//}
////Usando o count para saber o tamanho do array
//$elementos = count($meu_arr);
//for($i = 0 ; $i < $elementos; $i++){
//    echo 'Olá ' . $meu_arr[$i] . '<br>';
//}

//foreach ($meu_arr as $valor){
//    echo 'Olá ' . $valor . '<br>';
//}

//
//foreach ($meu_arr as $chave => $valor){
//    echo 'Olá ' . $valor . ' está na chave  ' . $chave . '<br>';
//}
//
//echo "Valor fora: $valor<br>Chave fora: $chave";
//
////Usando a referência para modificar os valores
//foreach ($meu_arr as &$valor){
//    $valor .= ' Novo' ;
//}
////
//print_r($meu_arr);
//unset($valor);

//Sintaxe alternativa
for ($i = 0; $i < 5; $i++):
    echo 'Olá ' . $meu_arr[$i] . '<br>';
endfor;

foreach ($meu_arr as $valor):
    echo 'Olá ' . $valor . '<br>';
endforeach;
?>


<?php
include '../todos/footer.php';
?>
