<?php
/**
 * Created by PhpStorm.
 * User: AdrianaL
 * Date: 23/05/2020
 * Time: 12:15
 */

/**
 * Está é uma função para demonstrar o uso de comentários para documentação
 * @param $nome
 * @return string
 */
function documentacao($nome)
{
    return $nome . ' sessa é a documentação';
}

/**
 * Para dar debug com info de onde estou dando o debug
 * @param $info
 * @param $where
 */


function display_info($info, $where)
{
    echo '<br><h1>From</h1>' . $where . '</h1><br>';
    echo '<pre>';
    var_dump($info);
    echo '</pre>';
}

/**
 * Para dar debug com fácil visualização
 * @param $info
 */
function myDebug($info)
{

    echo '<pre>';
    var_dump($info);
    echo '</pre>';
}

/**
 * Função para limpar input de html ou SQL malicioso
 */
//function sanitize($string)
//{
//
//
//    $string_limpo_1 = filter_var($string, FILTER_SANITIZE_STRING);
//    $string_limpo_2 = filter_var($string_limpo_1, FILTER_SANITIZE_STRING);
//    $string_limpo_3 = filter_var($string_limpo_2, FILTER_SANITIZE_STRING);
//    $string_limpo_4 = filter_var($string_limpo_3, FILTER_SANITIZE_STRING);
//    $string_limpo_final = filter_var($string_limpo_4, FILTER_SANITIZE_STRING);
//    return $string_limpo_final;
//}
//A partir do PHP 8.1 o filter_var foi deprecado. O indicado é usar o htmlspecialchars
function sanitize($string)
{

    $string_limpo_1 = htmlspecialchars($string, ENT_SUBSTITUTE);
    $string_limpo_2 = htmlspecialchars($string_limpo_1, ENT_SUBSTITUTE);
    $string_limpo_3 = htmlspecialchars($string_limpo_2, ENT_SUBSTITUTE);
    $string_limpo_4 = htmlspecialchars($string_limpo_3, ENT_SUBSTITUTE);
    $string_limpo_final = htmlspecialchars($string_limpo_4, ENT_SUBSTITUTE);

    return $string_limpo_final;
}