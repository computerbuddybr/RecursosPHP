<?php
//declare(strict_types=1);
include '../todos/functions.php';
include '../todos/header.php';
?>
<?php

//function olaMundo()
//{
//    echo 'Olá mundo<br>';
//}
//olaMundo();


//
////Definindo uma função condicionalmente
//$condicao = false;
//if($condicao){
//    function condicional(){
//        echo 'Funcionei';
//    }
//}
////Agora podemos chamar a função já que a condicional era verdadeira e portanto a função foi declarada
////Mas se eu declarar simplesmente assim e for false vai dar erro porque não foi declarada
////condicional();
//
////Então escrevemos assim:
//if($condicao) condicional();

//Ou se a função está sendo criada por outra função

//function externa(){
//    function interna(){
//        echo 'sou de dentro';
//    }
//}
//
//////Preciso primeiro chamar a função que vai declarar a outra função antes de chamar aquela função
//externa();
////
//interna();

//Declarando função com parâmetros
//function oi($nome, $idade){
//    echo 'Olá '. $nome . '. Você tem ' .$idade . ' anos.<br>';
//}

//Retornando um valor
//function oi($nome, $idade){
//    echo 'Olá '. $nome . '. Você tem ' .$idade . ' anos.<br>';
//    return 'Meu retorno';
//}

//Chamando a função com argumentos
//oi('Adriana', 25);
//oi(25, 'Adriana');
//var_dump(oi('Adriana',25));
//$string = oi('Adriana',25);
//echo $string;

//Passando argumentos por referência
//function concatenando(&$variavel){
//    $variavel .= ' e este pedaço foi adicionado pela função';
//    return "Adriana";
//}
//$meu_string = 'Este é o pedaço original';
//$retorno = concatenando($meu_string);
//echo $meu_string;
//echo "<br>";
//echo $retorno;

//Criando valores padrões
//function oi($nome = 'Adriana', $idade = 25){
//    echo 'Olá '. $nome . '. Você tem ' .$idade . ' anos.<br>';
//}
//Problemático
//function oi($nome = 'Adriana', $idade){
//    echo 'Olá '. $nome . '. Você tem ' .$idade . ' anos.<br>';
//}
//Correto
//function oi($idade, $nome = 'Adriana'){
//    echo 'Olá '. $nome . '. Você tem ' .$idade . ' anos.<br>';
//}
//oi();
//oi('Cerdeira', 30);
//oi(30);

//Declarações de tipo

//function soma(int $valor1, int $valor2){
//    return $valor1 + $valor2;
//}
////Vai dar certo
//echo soma(2,2);
//echo '<br>';
//////Vai dar erro
//echo soma('2','2');
//
////Declarando o tipo do retorno
//function soma(int $valor1, int $valor2): int {
//    return $valor1 + $valor2;
//}
//function soma($valor1, $valor2): int {
//    return $valor1 + $valor2;
//}
//
//var_dump(soma(1, 2));
//echo '<br>';
//var_dump(soma(1, 4.5));
//echo '<br>';
//$minha_func = 'soma';
//echo $minha_func(2,8);

//Funções Anônimas
//function usando_funcoes_anonimas($minha_func){
//    echo $minha_func();
//}
//usando_funcoes_anonimas(
//    function(){
//        return 'Sou uma função anônima';
//    });
//Outro método de se passar uma função anônima
//$anom_func = function(){ return 'Sou uma função anônima';};
//usando_funcoes_anonimas($anom_func);

//Passando como argumento uma função declarada normalmente
//function minha_func(){
// return 'Sou uma função anônima';
//}
//usando_funcoes_anonimas(minha_func());

//Arrow functions
//usando_funcoes_anonimas(fn() => 'Sou uma arrow');

//Atribuindo uma função a uma variavel

//$ola = function($nome){
//    echo 'Olá ' . $nome;
//};
////Chamando a função
//$ola('Adriana');

////Acessando variáveis no escopo global
// $sou_global = "Valor incial<br>";

// function trocarValorVariavelGlobal(){
//    global $sou_global;
//    $sou_global = "Coloquei valor na função<br>";
// }
// echo "Antes: ";
// echo $sou_global;
// trocarValorVariavelGlobal();
// echo "Depois: ";
// echo $sou_global;

//Argumentos Variáveis
// function somaVariavel(...$args){
//    var_dump($args);
//    echo "<br>";
//    $soma = 0;
//    foreach ($args as $valor){
//        $soma += $valor;
//    }
//    return $soma;
// }
//Passando argumentos variáveis misturados com argumentos padrões
//Modo correto
// function fixosEVariaveis($fixo, ...$variavel){
//    echo "Sou fixo: $fixo <br>";
//    foreach ($variavel as $elemento){
//        echo "Sou variável: $elemento <br>";
//    }
// }
////Modo errado
// function fixosEVariaveis( ...$variavel, $fixo){
//    echo "Sou fixo: $fixo <br>";
//    foreach ($variavel as $elemento){
//        echo "Sou variável: $elemento <br>";
//    }
// }
// echo somaVariavel(2,5,9,10), '<br>';
// echo somaVariavel(2,5,9,10,20), '<br>';
//$arr = [2,5,9,10];
//echo somaVariavel($arr), '<br>';
//echo somaVariavel(...$arr), '<br>';

// fixosEVariaveis("Fixo", "Variável 1", "Variável 2", "Variável 3", "Variável 4");
//Declarando tipos para parâmetros
//Sem declarar
//function soma($a,$b){
//    return $a + $b;
//}
//Declarando o parâmetro
//function soma(int $a,int $b){
//    return $a + $b;
//}

//Declarando o retorno
//function soma($a,$b) : int{
//    return $a + $b;
//}
//echo soma(2,2), '<br>';
//echo soma('2','2'), '<br>';
//echo soma('2','2dois'), '<br>';
//echo soma(true, true), '<br>';

//echo soma(2.5, 2.7);


//Novidade do PHP8 Named Arguments ou Argumentos Nomeados
//function minhaFuncao($nome, $sobrenome, $idade){
//    echo "Meu nome é $nome $sobrenome e tenho $idade anos<br>";
//}

//minhaFuncao('Adriana', 'Cerdeira', 25);

//minhaFuncao(nome: 'Adriana', idade: 25, sobrenome: 'Cerdeira');
//Errado
//minhaFuncao("Adriana", 25, sobrenome: "Cerdeira");
//Certo, ao misturar argumentos nomeados e não nomeados, tenho que colocar primeiro os não nomeados em ordem, sem pular e depois os seguintes eu posso mudar a ordem desde que estajam nomeados
//minhaFuncao("Adriana", idade: 25, sobrenome: "Cerdeira");
//minhaFuncao("Adriana", sobrenome: "Cerdeira", 25);
?>
<?php
include '../todos/footer.php';

