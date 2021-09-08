<?php

/**
 * Created by PhpStorm.
 * User: AdrianaL
 * Date: 24/05/2020
 * Time: 12:06
 */
class Pessoa
{
    public $nome;
    private $sobrenome;
    private $ano_de_nascimento;
    private $data;
    private $idade;

    function __construct($name, $surname, $year)
    {
        $this->nome = $name;
        $this->sobrenome = $surname;
        $this->ano_de_nascimento = $year;
        $this->data = date('Y', time());
        $this->calc_idade();
    }


    public function display_info($var)
    {
        echo $var;
    }

    private function calc_idade()
    {

        $this->idade = $this->data - $this->ano_de_nascimento;
    }
}