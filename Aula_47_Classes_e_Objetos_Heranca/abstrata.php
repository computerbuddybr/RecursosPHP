<?php


abstract class Abstrata
{
    //Método implementado
    function mostrar()
    {
        echo 'Sou uma classe abstrata<br>';
        $this->souPrivado();
        $this->souProtegidoPraImplementar();
    }

    protected function souProtegido()
    {
        echo 'Sou protegido<br>';
    }

    //Método abstrato
    abstract function semCorpo();

    protected abstract function souProtegidoPraImplementar();

    private function souPrivado()
    {
        echo 'Sou privado<br>';

    }


}


class Concreta extends Abstrata
{
    function mostrar()
    {
        parent::mostrar();
        echo 'Sou do filho<br>';
    }

    public function semCorpo()
    {
        // TODO: Implement semCorpo() method.
        echo 'Implementei aqui<br>';
        echo $this->souProtegido();
        //echo $this->souProtegidoPraImplementar();
    }

    public function souProtegido()
    {
        echo "Agora sou público";
    }

    protected function souProtegidoPraImplementar()
    {
        // TODO: Implement souProtegidoPraImplementar() method.
        echo 'Implementei protegido aqui<br>';
    }

}




