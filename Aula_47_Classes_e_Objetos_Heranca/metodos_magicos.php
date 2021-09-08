<?php


class Pessoa
{
    private $idade;
    private $nome;
    public $profissao;
    private $attrNaoDeclarados = [];

    /**
     * Método invocado quando o objeto é instanciado
     * Pessoa constructor.
     * @param $nome
     * @param $idade
     * @param $profissao
     */
    public function __construct($nome, $idade, $profissao)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->profissao = $profissao;
        echo "Sou $this->nome, tenho $this->idade e minha profissão é $this->profissao<br>";
    }

    /**
     * Método chamado quando o objeto é destruído
     */
    public function __destruct()
    {
        echo '<br>Ai, ai<br>';
    }

    /**
     * Sempre que um objeto entrar em um contexto em que ele é convertido em um string este método é chamado
     * @return string
     */
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "Sou $this->nome, tenho $this->idade e minha profissão é $this->profissao e fui convertido a um string<br>";
    }

    /**
     * Sempre que vc chamar um método que não existe vai chamar o método call sendo que o nome vai ser um string e os argumentos um array
     * @param $name
     * @param $arguments
     */
    public function __call($name, $arguments)
    {
        echo "<br>Oops o método $name não existe e não pode ser chamado com os ";
        print_r($arguments);
    }

    /**
     * Sempre que vc chamar um método static que não existe vai chamar o método call sendo que o nome vai ser um string e os argumentos um array
     * @param $name
     * @param $arguments
     */
    public static function __callStatic($name, $arguments)
    {
        echo "<br>Oops o método static $name não existe e não pode ser chamado com os ";
        print_r($arguments);
    }

    /**
     * Método chamado sempre que eu tentar acessar um atributo que não existe, ele não pode declarar novos atributos
     * @param $name
     */
    public function __get($name)
    {

        array_push($this->attrNaoDeclarados, $name);
//        $this->$name = $name;
//        $this->tentei = "Tentei aqui";
        echo "Lendo um atributo não declarado $name<br>";
        return $name;
    }

    /**
     * Método chamado quando tento dar um valor a um atributo não declarado
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        $this->attrNaoDeclarados[$name] = $value;
        unset($this->$name);
    }

    /**
     * Chamado ao tentar usar isset em uma propriedade privada ou protegida
     * @param $name
     */
    public function __isset($name)
    {
        echo "<br>A propriedade $name não é pública, você não pode acessá-la para ver se está declarada<br>";
        return true;
    }

    /**
     * Chamado ao tentar usar unset em uma propriedade privada ou protegida
     * @param $name
     */
    public function __unset($name)
    {
        echo "<br>A propriedade $name não é pública, você não pode acessá-la para destruí-la";
        unset($this->$name);
    }


    /**
     * Método que deve retornar um array e que será chamado em situações onde um debug é necessário
     * @return string[]
     */
    public function __debugInfo()
    {

        // return ['Porque vc quer saber de mim?<br>'];
        return ["primeiro" => 'Porque vc quer saber de mim?<br>', "segundo" => "Este é o segundo elemento"];
    }
}


?>