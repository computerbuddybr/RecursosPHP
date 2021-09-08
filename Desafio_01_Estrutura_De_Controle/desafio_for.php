<?php
include '../todos/functions.php';
include '../todos/header.php';

$arr = [
    ['Este', ' é', ' o', ' primeiro', ' array', ' interno'],
    ['Este', ' é', ' o', ' segundo', ' array', ' interno']
];
//for ($i = 0; $i < count($arr); $i++) {
//    for ($a = 0; $a < count($arr[$i]); $a++) {
//        echo $arr[$i][$a];
//    }
//    echo '<br>';
//
//}
foreach ($arr as $arr_interno) {
    foreach ($arr_interno as $valor) {
        echo $valor;
    }
    echo "<br>";

}


include '../todos/footer.php';
