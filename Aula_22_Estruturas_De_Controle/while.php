<?php
include '../todos/functions.php';
include '../todos/header.php';

$i = 0;
while ($i < 10) {
    echo $i . '<br>';
    $i++;
}

////Sintaxe alternativa
while ($i < 20):
    echo $i . '<br>';
    $i++;
endwhile;

$expressao = false;
do {
    echo 'Eu rodei<br>';
} while ($expressao);

do {
    echo $i . '<br>';
    $i++;
} while ($i < 10);

?>


<?php
include '../todos/footer.php';
?>
