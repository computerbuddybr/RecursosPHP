<?php
include '../todos/functions.php';
include '../todos/header.php';

//$variavel = 1 + 1;
//echo 'Variável: ';
//echo $variavel;
//echo '<br>';
////
//$variavel2 = $variavel;
//echo 'Variável 2: ';
//echo $variavel2;
//echo '<br>';
//$variavel = 3;
//echo 'Variável 2 depois de alteração 1: ';
//echo $variavel2;
//echo '<br>';
////
//$variavel2 = 4;
//echo 'Variável 1 depois de alteração 2: ';
//echo $variavel;
//echo '<br>';
//
//echo 'Variável atribuida por referência: ';
//echo '<br>';
//
//$original = 2;
//$novo = &$original;
//echo 'Original: ';
//echo $original;
//echo '<br>';
//echo 'Novo: ';
//echo $novo;
//echo '<br>';
//echo '<br>';
////
//$original = 'O original foi alterado';
//
//echo 'Depois da alteração do original:<br>';
//echo 'Original: ';
//echo $original;
//echo '<br>';
//echo 'Novo: ';
//echo $novo;
//echo '<br>';
////
//$novo = 'O novo foi alterado';
//echo '<br>';
//echo 'Depois da alteração do novo:<br>';
//echo '<br>';
//echo 'Original: ';
//echo $original;
//echo '<br>';
//echo 'Novo: ';
//echo $novo;
//echo '<br>';

//Errado
//$minha_referencia = &(1+1);

//Escopo
//Global
//$eu_sou_global = 'Sou global';
////echo $eu_sou_global, '<br>';
//
////function oi(){
////    $eu_sou_local = 'Sou local';
////
////
////    global $eu_sou_global;
////
////
////    echo $eu_sou_local;
////    echo ' - ';
////    echo $eu_sou_global. '<br>';
////    //$eu_sou_global = 'A função me alterou';
////}
////
////
////oi();
////echo $eu_sou_global, '<br>';
////global $eu_sou_local;
////echo '<br>Local de fora: ', $eu_sou_local;
//if(true){
//    $dentro_do_if = 'Sou de dentro do if';
//    echo '<br>', $eu_sou_global;
//}
//echo '<br>', $dentro_do_if;


//Static
//function test()
//{
//    //$a = 0;
//    static $a = 0;
//    echo $a,  '<br>';
//    $a++;
//}
//test();
//test();
//test();

//Variáveis variáveis
//$minha_var = 'nome';
//$$minha_var = 'Adriana';
//echo $nome, '<br>', $minha_var;

//Se for usar com Arrays
//$meu_array = ['nome', 'sobrenome'];
//${$meu_array[0]} = 'Adriana';
//echo $nome;
//echo '<br>';
////ou
//$nova_var = 'idade';
//$$nova_var = [25,30];
//echo ${$nova_var}[1];

//Contantes
//define('CONSTANTE', 500);
const CONSTANTE = 500;
echo CONSTANTE;
//CONSTANTE = 1000;
$variavel = 'Variavel';
//const CONSTANTE_NOVA = $variavel;
//const CONSTANTE_NOVA = 2+2;
define('CONSTANTE_NOVA', $variavel);
echo CONSTANTE_NOVA;
echo '<br>', __FILE__;
echo '<br>', __DIR__;


?>


<?php
include '../todos/footer.php';
?>
