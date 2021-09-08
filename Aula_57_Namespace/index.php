<?php
include '../todos/functions.php';
include '../todos/header.php';
include 'primeiro/functions.php';
include 'segundo/functions.php';
include 'sub-namespaces/subnamespaces.php';
include 'sub-namespaces/subnamespace2.php';
//se eu estabelecer o Namespace que uso posso chamar diretamente a classe ou constante


//\Primeiro\mostrar();
//\Segundo\mostrar();


//$adriana = new \Primeiro\Pessoa('Adriana', 20);
////$adriana = new Pessoa('Adriana', 20);
//echo "<br>Meu nome é $adriana->nome e minha idade $adriana->idade<br>";
//echo __NAMESPACE__;
//
//var_dump('Estou chamando do index sem o caminho');
//\Primeiro\ var_dump('Estou chamando do index com o caminho \\primeiro');

\App\exibir();
\App\NoMesmoArquivo\exibir();
\App\OutroArquivo\exibir();
\App\OutroArquivo\MaisDentroAinda\exibir();


include '../todos/footer.php';
?>