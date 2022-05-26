<?php


trait validacao
{
    public $id = "id";

    private function cuidadosComDB($campo)
    {
        if (!isset($_POST[$campo]) || $_POST[$campo] === '') {
            return false;
        }
    }

    /**
     * Função para limpar input de html ou SQL malicioso
     */
//    protected function sanitize($string)
//    {
//
//
//        $string_limpo_1 = filter_var($string, FILTER_SANITIZE_STRING);
//        $string_limpo_2 = filter_var($string_limpo_1, FILTER_SANITIZE_STRING);
//        $string_limpo_3 = filter_var($string_limpo_2, FILTER_SANITIZE_STRING);
//        $string_limpo_4 = filter_var($string_limpo_3, FILTER_SANITIZE_STRING);
//        $string_limpo_final = filter_var($string_limpo_4, FILTER_SANITIZE_STRING);
//        return $string_limpo_final;
//    }
//A partir do PHP 8.1 o filter_var foi deprecado. O indicado é usar o htmlspecialchars
    protected function sanitize($string)
    {

        $string_limpo_1 = htmlspecialchars($string, ENT_SUBSTITUTE);
        $string_limpo_2 = htmlspecialchars($string_limpo_1, ENT_SUBSTITUTE);
        $string_limpo_3 = htmlspecialchars($string_limpo_2, ENT_SUBSTITUTE);
        $string_limpo_4 = htmlspecialchars($string_limpo_3, ENT_SUBSTITUTE);
        $string_limpo_final = htmlspecialchars($string_limpo_4, ENT_SUBSTITUTE);

        return $string_limpo_final;
    }

    public function teste($string)
    {
        echo $this->sanitize($string), '<br>';
    }


}

class Cliente
{
    use validacao;
}

class Sapato
{
    use validacao;
}


//Exemplo de trait com mesmo método que a classe pai
class Usuario
{
    private function sanitize($string)
    {
        return 'Sou o sanitize do pai<br>';
    }

    public function teste($string)
    {
        echo "Sou teste do pai", '<br>';
    }
}

class Cliente2 extends Usuario
{
    use validacao;
}

//exemplo de traits com métodos ou atributos iguais

trait primeiro
{
    public function vouSerIgualNosDois1()
    {
        echo 'Sou do primeiro trait função 1<br>';
    }

    public function vouSerIgualNosDois2()
    {
        echo 'Sou do primeiro trait  função 2<br>';
    }

    public function soNoPrimeiro()
    {
        echo 'Estou só no primeiro trait<br>';
    }
}

trait segundo
{
    public function vouSerIgualNosDois1()
    {
        echo 'Sou do segundo trait função 1<br>';
    }

    public function vouSerIgualNosDois2()
    {
        echo 'Sou do segundo trait  função 2<br>';
    }

    public function soNoSegundo()
    {
        echo 'Estou só no segundo trait<br>';
    }
}

class TesteConflito
{
//    use primeiro, segundo;//Deste modo vai dar conflito
    use primeiro, segundo {
        primeiro::vouSerIgualNosDois1 insteadof segundo;
        primeiro::vouSerIgualNosDois1 as primeirao;
        segundo::vouSerIgualNosDois2 insteadof primeiro;

        //Vou dar um alias
        segundo::vouSerIgualNosDois1 as dandoAlias;

    }
}


?>