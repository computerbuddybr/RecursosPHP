<?php

include 'use_as.php';

//\Exemplo\De\Caminho\Bem\Longo\exibir();
//
//\Exemplo\De\Caminho\Bem\Longo\MinhaClasse::onde();

//Usando a classe depois de declarar que vou usar ela
use \Exemplo\De\Caminho\Bem\Longo\MinhaClasse;

//
MinhaClasse::onde();
\Exemplo\De\Caminho\Bem\Longo\exibir();

//Atribuindo um alias ao meu Namespace para poder usar daqui para frente o Alias
//use \Exemplo\De\Caminho\Bem\Longo as App;
//App\MinhaClasse::onde();
//App\exibir();








