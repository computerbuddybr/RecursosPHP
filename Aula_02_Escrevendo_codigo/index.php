<?php
require '../todos/header.php';
require_once '../todos/header.php';
include_once '../todos/header.php';

include 'incluido.php';
$minha_primeira_variavel = 'Olá mundo';
include 'teste/novo.php';
?>

<?= 'Nova tag'; ?>

<p>
    <?php echo $minha_primeira_variavel . 2; ?>
</p>
<p>
    <?php echo $minha_primeira_variavel . ' sou ' . $nome; ?>
</p>


<?php include '../todos/footer.php'; ?>
