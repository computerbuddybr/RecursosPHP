<?php
include '../todos/functions.php';
include '../todos/header.php';
include 'metodos_magicos.php';

$adriana = new Pessoa('Adriana', 20, 'Web Dev');

//echo $adriana->adriana;

//Neste contexto estou tentando forçar a conversão em string então ele vai chamar o método mágico __toString
//echo $adriana;

//Tentando acessar um atributo que não existe. Então ele dá echo mas não atribui esse atributo a ninguém, vc viu que meu objeto ficou igual, mas isso não é útil certo, então o que eu posso fazer é justamente criar esse atributo
//display_info($adriana, 'Antes do get e set');
//echo "Será que tem o atributo a seguir: $adriana->teste<br>";
//display_info($adriana, 'Antes do get e set');
////Tentando alterar valor de um atributo não declarado vai chamar o __set
//$adriana->sobrenome = 'Cerdeira';
//display_info($adriana, 'Depois do set');
//
////Chamando métodos que não existem
//$adriana->apresentacao('Meu argumento', 'Outro argumento');
//Pessoa::apresentar('Meu argumento', 'Outro argumento');
//
////Chamando isset e unset em propriedades privadas ou protegidas
//var_dump(isset($adriana->nome));
//var_dump(isset($adriana->naoCriada));
//unset($adriana->profissao);
////display_info($adriana, "Depois do unset");
//unset($adriana->nome);
//display_info($adriana, "Depois do unset");
//
//
////Como eu tenho um __debugInfo em vez de retornar as propriedades do objeto ele vai retornar o array que eu defini
display_info($adriana, 'Depois do debug');
echo $adriana->profissao;
echo '<br>';
echo $adriana->primeiro;

//


//unset($adriana);


include '../todos/footer.php';