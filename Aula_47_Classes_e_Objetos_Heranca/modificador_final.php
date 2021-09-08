<?php

/**
 * Class EstaClasseNaoSeraHerdada
 * Por está classe estar marcada como final ela não pode ser herdada
 */
final class EstaClasseNaoSeraHerdada
{

    public function mostrar()
    {
        echo 'A classe inteira não pode ser herdada<br>';
    }
}

class MetodosFinal
{
    final public function naoPoderaSerAlterado()
    {
        echo 'Aqui a classe pode ser herdada mas o método não pode ser sobrescrito<br>';
    }

    protected function estePode()
    {
        echo "Este pode<br>";
    }
}

//O que vai dar erro?

//class Filha extends EstaClasseNaoSeraHerdada{
//
//}

class Filha2 extends MetodosFinal
{

//    public function naoPoderaSerAlterado(){
//        echo 'Sobreescrevi, será que vai dar certo?<br>';
//    }

    public function estePode()
    {
        echo "Classe nova<br>";
    }
}


?>