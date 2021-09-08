<?php

/**
 * Created by PhpStorm.
 * User: AdrianaL
 * Date: 30/05/2020
 * Time: 16:15
 */
class DBConnect
{
//Constantes não vão mudar, são nomeadas sem o $ e em maiúsculas. Sempre fazer a informação de Bases de Dados privada.
    private const DB_NAME = 'carros';
    private const DB_USER = 'root';
    private const DB_PASS = 'root';
    protected $db;


    function __construct()
    {
        $this->db = 'Conectei<br>';
    }

    /**
     * Função para limpar input de html ou SQL malicioso
     */
    protected function sanitize($string)
    {


        $string_limpo_1 = filter_var($string, FILTER_SANITIZE_STRING);
        $string_limpo_2 = filter_var($string_limpo_1, FILTER_SANITIZE_STRING);
        $string_limpo_3 = filter_var($string_limpo_2, FILTER_SANITIZE_STRING);
        $string_limpo_4 = filter_var($string_limpo_3, FILTER_SANITIZE_STRING);
        $string_limpo_final = filter_var($string_limpo_4, FILTER_SANITIZE_STRING);
        return $string_limpo_final;
    }
}