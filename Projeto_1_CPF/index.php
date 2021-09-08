<?php
include '../todos/functions.php';
include '../todos/header.php';
include 'function.php';


//if(isset($_POST['submit'])){
//validar_cpf($_POST['cpf']);
//} else {
//    include 'form.php';
//}

if (isset($_POST['submit'])) {
    if (!validar_cpf($_POST['cpf'])) {
        include 'form.php';
    }
} else {
    include 'form.php';
}

display_info($_POST, "Dados");

?>


<?php
include '../todos/footer.php';
?>
