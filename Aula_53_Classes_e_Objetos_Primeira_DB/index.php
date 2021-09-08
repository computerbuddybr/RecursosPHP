<?php
include '../todos/functions.php';
include '../todos/header.php';
//include 'Model/DBCRUD.php';
include 'Controller/DadosCarros.php';

//Acessando propriedade do pai
//$db = new DBCRUD();
//$dados = $db->read();
//Devolvendo o Objeto com os dados da base de dados
$dados = new DadosCarros();
include $dados->page;

?>


<?php
include '../todos/footer.php';
?>
