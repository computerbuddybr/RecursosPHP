<?php

namespace App;
function exibir()
{
    echo "<br>Sou o namespace inicial";
}

namespace App\NoMesmoArquivo;
function exibir()
{
    echo "<br>Sou o sub-namespace no mesmo arquivo";
}
