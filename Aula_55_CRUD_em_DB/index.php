<?php
include '../todos/functions.php';
include '../todos/header.php';
//CRUD - Create, read, update e delete

//Criar DB - uso o IF NOT EXISTS para garantir que recebo um aviso em vez de um erro se a db já existe

$sqlCriarDB = 'CREATE DATABASE IF NOT EXISTS minha_primeira_db';


//Apagar DB - uso o IF EXISTS para garantir que recebo um aviso em vez de um erro se a db não existe

$sqlApagarDB = 'DROP DATABASE IF EXISTS minha_primeira_db';

//Criar tabela

$sqlCriarTabela = "CREATE TABLE IF NOT EXISTS minha_primeira_tabela (
id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
nome varchar(255) NOT NULL,
sobrenome varchar(255) NOT NULL,
PRIMARY KEY (id)
 )
";


//Apagar tabela

$sqlApagarTabela = "DROP TABLE minha_primeira_tabela";

//Inserindo registro
$sqlInserirRegistro = "INSERT INTO minha_primeira_tabela (nome, sobrenome) VALUES ('Adriana', 'Cerdeira')";

//Atualizando registro
$sqlAtualizarRegistro = "UPDATE minha_primeira_tabela SET nome='Adriana Laura', sobrenome='Cerdeira' WHERE id=2";

//Apagando registro

$sqlApagarRegistro = "DELETE FROM minha_primeira_tabela WHERE id=2";


include '../todos/footer.php';
?>