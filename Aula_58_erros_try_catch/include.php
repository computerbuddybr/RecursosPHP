<?php
include '../todos/header.php';

echo 'Percebi um erro e vou querer parar<br>';
//die('Oops, deu erro');
exit('Deu erro');
echo 'Não vai rodar mais nada aqui<br>';

include '../todos/footer.php';