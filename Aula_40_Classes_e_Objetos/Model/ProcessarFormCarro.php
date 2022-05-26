<?php

/**
 * Created by PhpStorm.
 * User: AdrianaL
 * Date: 30/05/2020
 * Time: 13:17
 */
class ProcessarFormCarro
{
    //poderão ser acessadas fora da Classe
    public $ano;
    public $modelo;
    public $cor;
    public $marca;
    public $dono;
    public $valor;


    function __construct()
    {
        $this->processarForm();
    }

    private function processarForm()
    {
        if (isset($_POST['submit'])) {
            //display_info($_POST, 'Do meu POST');
            $this->modelo = $this->sanitize($_POST['modelo']);
            $this->ano = $this->sanitize($_POST['ano']);
            $this->cor = $this->sanitize($_POST['cor']);
            $this->marca = $this->sanitize($_POST['marca']);
            $this->dono = $this->sanitize($_POST['dono']);
            $this->valor = $this->sanitize($_POST['valor']);

        }
    }

    /**
     * Função para limpar input de html ou SQL malicioso
     */
//    private function sanitize($string)
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
    private function sanitize($string)
    {

        $string_limpo_1 = htmlspecialchars($string, ENT_SUBSTITUTE);
        $string_limpo_2 = htmlspecialchars($string_limpo_1, ENT_SUBSTITUTE);
        $string_limpo_3 = htmlspecialchars($string_limpo_2, ENT_SUBSTITUTE);
        $string_limpo_4 = htmlspecialchars($string_limpo_3, ENT_SUBSTITUTE);
        $string_limpo_final = htmlspecialchars($string_limpo_4, ENT_SUBSTITUTE);

        return $string_limpo_final;
    }
}
