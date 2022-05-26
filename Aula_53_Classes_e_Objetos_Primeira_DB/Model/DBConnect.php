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
    private const HOST = 'localhost';
    private const DB_TIPO = 'mysql'; //A minha base é MariaDB que é compatível com o conector mysql para PHP. Inclusive, muito bacana porque a Base MariaDB foi criada pensando em compatibilidade com MySQL e com algumas poucas exceções elas são extremamente intercambiáveis


    protected $db;

    /**
     * DBConnect constructor.
     */
    function __construct()
    {
        //Primeiro argumento seria o caminho com o tipo de db, a fonte da base de dados (DNS) neste caso localhost e o nome da base de dados, o segundo argumento é o usuário e o terceiro a senha
        //O primeiro argumento do PDO é um string com o seguinte formato: 'mysql:host=localhost;dbname=test'
        $caminho = DBConnect::DB_TIPO . ':host=' . DBConnect::HOST . ';dbname=' . DBConnect::DB_NAME;
        //$caminho = 'mysql:host=localhost;dbname=carros';

        $this->db = new PDO($caminho, DBConnect::DB_USER, DBConnect::DB_PASS);
        //Como fazer para fazer uma conexão persistente
//        $this->db = new PDO($caminho, DBConnect::DB_USER, DBConnect::DB_PASS, array(
//            PDO::ATTR_PERSISTENT => true
//        ));
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

}