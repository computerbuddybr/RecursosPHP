<?php
include '../todos/functions.php';
include '../todos/header.php';
const DB_NAME = 'minha_primeira_db';
const DB_user = 'root';
const DB_pass = 'root';
const HOST = 'localhost';
const DB_TIPO = 'mysql';
const TABLE_NAME = 'minha_primeira_tabela';


$caminho = DB_TIPO . ':host=' . HOST . ';dbname=' . DB_NAME;
// $caminho = 'mysql:host=localhost;dbname=carros';
try {
    $conexao = new PDO($caminho, DB_USER, DB_PASS);
} catch (PDOException $e) {
    die('Oops, deu erro com a minha conexão: ' . $e->getMessage());
}


include '../todos/footer.php';
?>