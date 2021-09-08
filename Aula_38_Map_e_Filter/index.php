<?php
include '../todos/functions.php';
include '../todos/header.php';


$meu_arr = [1, 2, 3, 4];

$par_ou_impar = function ($elemento) {
    if ($elemento % 2 === 0) {
        return 'Par';
    } else {
        return 'Impar';
    }
};

//Map
$meu_novo_arr = array_map($par_ou_impar, $meu_arr);
print_r($meu_novo_arr);

//Equivalente a:
//$meu_novo_arr = [];
//foreach ($meu_arr as $elemento){
//    array_push($meu_novo_arr, $par_ou_impar($elemento));
//}
//print_r($meu_novo_arr);

//Filter
$par = function ($elemento) {
    if ($elemento % 2 === 0) {
        return true;
    } else {
        return false;
    }
};
$meu_novo_arr = array_filter($meu_arr, $par);
echo '<br>';
print_r($meu_novo_arr);

//Equivale a:
$meu_novo_arr = [];
foreach ($meu_arr as $elemento) {
    if ($par($elemento)) {
        array_push($meu_novo_arr, $elemento);
    }
}
//print_r($meu_novo_arr);


include '../todos/footer.php';
?>