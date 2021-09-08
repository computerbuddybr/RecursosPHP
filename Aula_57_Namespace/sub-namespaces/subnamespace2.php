<?php

namespace App\OutroArquivo;
function exibir()
{
    echo "<br>Sou o sub-namespace em outro arquivo";
}

namespace App\OutroArquivo\MaisDentroAinda;

function exibir()
{
    echo "<br>Mais dentro ainda";
}