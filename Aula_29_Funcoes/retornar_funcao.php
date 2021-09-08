<?php
include '../todos/functions.php';
include '../todos/header.php';

// function retornando_func(){
//     return function(){
//         echo 'Sou função retornada <br>';
//     };
// }


//retornando_func();
//atribuindo a função o resultado da função a uma variável assim a minha variável passa a ser a função retornada
// $minha_func = retornando_func();
// $minha_func();

//Chamando sem atribuir
// retornando_func()();

//Com paramêtros na função retornada
// function retornando_func_com_param(){
//    return function($nome){
//        echo "Sou função retornada $nome <br>";
//    };
// }
// $minha_func = retornando_func_com_param();
// $minha_func('Cerdeira');
// retornando_func_com_param()('Adriana');


// function retornando_func_com_param($nome){
//    return function($nome){
//        echo "Sou função retornada $nome <br>";
//    };
// }

// retornando_func_com_param('Primeiro param')('Adriana');
// //Este vai gerar erro de poucos argumentos
// retornando_func_com_param('Primeiro param')();


// function retornando_func_com_param($nome){
//     return function() use ($nome){

//         echo "Sou função retornada $nome <br>";
//     };
// }

// retornando_func_com_param('Primeiro param')();

// function retornando_func_com_param2($sobrenome){
//    return function($nome) use ($sobrenome){

//        echo "Sou função retornada $nome $sobrenome <br>";
//    };
// }


// retornando_func_com_param2('Cerdeira')('Adriana');

// $familia = retornando_func_com_param2('Cerdeira');
// $familia('Adriana');
// $familia('Paula');

//Exemplo de separação do algorítimo para otimizar processo
function familiar($sobrenome, $idade)
{
    if ($idade > 20) {
        $status = 'Progenitor';
    } else {
        $status = 'Prole';
    }
    return function ($nome) use ($sobrenome, $status) {
        echo "Sou $status e meu nome é $nome $sobrenome <br>";
    };

}

$idade = 25;
$sobrenome = 'Cerdeira';
$array_familia = ['Max', 'Juliana', 'Marcos'];
$familia = familiar($sobrenome, $idade);
foreach ($array_familia as $familiar) {
    $familia($familiar);
}


include '../todos/footer.php';
?>