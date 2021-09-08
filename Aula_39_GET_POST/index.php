<?php
include '../todos/functions.php';
include '../todos/header.php';
?>
<form action="#" method="get">
    <input type="text" name="caixa_get">
    <input type="submit" name="submit_get">
</form>

<form action="#" method="post">
    <input type="text" name="caixa_post">
    <input type="submit" name="submit_post">
</form>

<?php

display_info($_GET, 'Do meu get');
//echo $_GET['caixa_get'];
if (isset($_GET['submit_get'])) {
    echo $_GET['caixa_get'];
}
display_info($_POST, 'Do meu post');
if (isset($_POST['submit_post'])) {
    echo $_POST['caixa_post'];
}

include '../todos/footer.php';
?>
