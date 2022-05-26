<?php


class DBConnect
{
    private const DB_NAME = 'carros';
    private const DB_user = 'root';
    private const DB_pass = '';
    private const HOST = 'localhost';
    private const DB_TIPO = 'mysql';
    protected $db;

    function __construct()
    {

        $caminho = DBConnect::DB_TIPO . ':host=' . DBConnect::HOST . ';dbname=' . DBConnect::DB_NAME;

        $this->db = new PDO($caminho, DBConnect::DB_user, DBConnect::DB_pass);
    }

    /**
     * Função para limpar input de html ou SQL malicioso
     */
//    protected function sanitize($string)
//    {
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
}