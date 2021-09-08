<?php

namespace Exemplo\De\Caminho\Bem\Longo;

function exibir()
{
    echo "<br>Sou do namespace super longo";
}

class MinhaClasse
{
    static public function onde()
    {
        echo '<br> Namespace: ' . __NAMESPACE__ .
            '<br> Classe: ' . __CLASS__ .
            '<br> Método: ' . __METHOD__;
    }
}
