<?php
include '../todos/functions.php';
include '../todos/header.php';

echo 'Estou aqui no programa<br>';
goto novo;
echo 'Este aqui não vai rodar<br>';
echo 'Este aqui não vai rodar<br>';
echo 'Este aqui não vai rodar<br>';
echo 'Este aqui não vai rodar<br>';

novo:
echo 'Voltei<br>';

for ($i = 0; $i < 100; $i++) {
    $aleatorio = rand(1, 50);
    echo $i . ':<br>';
    if ($aleatorio === 20) {
        goto ganhei;
    }
}
ganhei:
echo 'Consegui o 20';

?>


<?php
include '../todos/footer.php';
?>
