<?php

namespace Primeiro;
function mostrar()
{
    echo '<br>Sou do diretório primeiro!<br>';
}

class Pessoa
{
    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
}

//$variavel_dentro_do_name = '<br>Olá, sou uma variável dentro do namespace';
//echo $variavel_dentro_do_name;
//Isto vai ser entendido como uma variável que está no sub-namespace do namespace primeiro que também chama primeiro como se o caminho fosse \primeiro\primeiro\$variavel_dentro_do_name
//echo \Primeiro\$variavel_dentro_do_name;

//Está seria a função var_dump definida no namespace
function var_dump($string)
{
    echo "<br>Eu sou a função definida pelo namespace sendo chamada de: $string <br>";
}
//var_dump('Estou chamando do namespace sem a barra');

