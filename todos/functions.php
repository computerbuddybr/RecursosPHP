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
    return $nome . ' essa é a documentação';
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