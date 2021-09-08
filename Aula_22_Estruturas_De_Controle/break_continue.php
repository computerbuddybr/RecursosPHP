<?php
include '../todos/functions.php';
include '../todos/header.php';
//echo 'Continue:<br>';
//for ($i = 0; $i <= 10; $i++) {
//    if ($i % 2 === 0) {
//        echo $i . ' - Eu sou par!<br>---<br>';
//        continue;
//    } else {
//        echo $i . ' - Eu sou impar!<br>';
//    }
//    echo 'Eu só vou rodar nos impares<br>---<br>';
//}
//
//echo '<br>Break:<br>';
//for ($i = 0; $i <= 10; $i++) {
//    if ($i % 2 === 0) {
//        echo $i . ' - Eu sou par!<br>';
//        break;
//    } else {
//        echo $i . ' - Eu sou impar!<br>';
//    }
//    echo 'Eu só vou rodar nos impares';
//}
//Aninhando loops para usar argumento
//for ($a = 1; $a <= 4; $a++) {
//    for ($i = 0; $i <= 10; $i++) {
//        if ($i % 2 === 0) {
//            echo $i . ' - Eu sou par!<br>';
//            break 2;
//        } else {
//            echo $i . ' - Eu sou impar!<br>';
//        }
//        echo 'Eu só vou rodar nos impares<br>';
//    }
//    echo 'Estou no loop externo<br>';
//}

for ($a = 1; $a <= 4; $a++) {
    for ($i = 0; $i <= 10; $i++) {
        if ($i % 2 === 0) {
            echo $i . ' - Eu sou par!<br>---<br>';
            continue 2;
        } else {
            echo $i . ' - Eu sou impar!<br>';
        }
        echo 'Eu só vou rodar nos impares<br>---<br>';
    }
    echo 'Estou no loop externo<br>';
}

?>


<?php
include '../todos/footer.php';
?>
