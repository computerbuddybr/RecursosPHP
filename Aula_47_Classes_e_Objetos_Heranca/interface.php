<?php


interface Template
{
    function apresentar();

}

interface Template2
{
    function somar(int $a, int $b): int;
}

interface Herdada extends Template
{
    function souHerdada();
}

interface Herdada2 extends Template, Template2
{
    function souHerdadaDeMultiplas();
}

class doMeuTemplate implements Template, Template2
{

    public function apresentar()
    {
        // TODO: Implement apresentar() method.
        echo 'Implementei<br>';

    }

    public function somar(int $a, int $b): int
    {
        // TODO: Implement somar() method.
        return $a + $b;
    }
}

class daMinhaFilha implements Herdada
{
    public function apresentar()
    {
        // TODO: Implement apresentar() method.
        echo 'Sou da Interface pai<br>';
    }

    public function souHerdada()
    {
        // TODO: Implement souHerdada() method.
        echo 'Sou da Interface filha<br>';
    }

    private function souSoDaClasse()
    {
        echo 'Sou da só da Classe<br>';

    }
}

class daMinhaFilha2 implements Herdada2
{
    public function apresentar()
    {
        // TODO: Implement apresentar() method.
    }

    public function somar(int $a, int $b): int
    {
        // TODO: Implement somar() method.
    }

    public function souHerdadaDeMultiplas()
    {
        // TODO: Implement souHerdadaDeMultiplas() method.
    }
}

class Testando implements Herdada2
{

    function apresentar()
    {
        // TODO: Implement apresentar() method.
        echo "Oi";
    }

    function somar(int $a, int $b): int
    {
        // TODO: Implement somar() method.
        echo "Oi";
        return $a + $b;
    }


    function souHerdadaDeMultiplas()
    {
        // TODO: Implement souHerdadaDeMultiplas() method.
        echo "Nova função<br>";
    }
}