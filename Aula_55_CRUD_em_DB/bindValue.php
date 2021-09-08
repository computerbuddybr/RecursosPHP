<?php
include '../todos/functions.php';
include '../todos/header.php';
//Vamos fazer um exemplo PDO com bind params e colunas

const DB_NAME = 'carros';
const DB_USER = 'root';
const DB_PASS = '';
const HOST = 'localhost';
const DB_TIPO = 'mysql';
const TABLE_NAME = 'carros';


$caminho = DB_TIPO . ':host=' . HOST . ';dbname=' . DB_NAME;
// $caminho = 'mysql:host=localhost;dbname=carros';

$conexao = new PDO($caminho, DB_USER, DB_PASS);

$id = 1;
//$sqlBuscaPrepared = "SELECT marca, modelo FROM carros WHERE id=:id";
$sqlBuscaPrepared = "SELECT marca, modelo FROM carros WHERE modelo=:modelo";
try {
    $declaracao = $conexao->prepare($sqlBuscaPrepared);

    //$declaracao->bindValue(':id', $id, PDO::PARAM_INT);
    $declaracao->bindValue(':modelo', 'Corolla', PDO::PARAM_STR);

    $declaracao->execute();

//Fazendo Bind das colunas com seu nome como primeiro argumento, posso também com a ordem das colunas e como segundo argumento a variável na qual o nome será ligado
    $declaracao->bindColumn('marca', $marca);
    $declaracao->bindColumn('modelo', $modelo);
//Pegando os dados
    $dados = $declaracao->fetch(PDO::FETCH_BOUND);//PDO::FETCH_BOUND não é obrigatório mas é boa prática porque ele garante que todas as variáveis ligadas a colunas sejam atualizadas a cada chamada de fetch. Se vc esquecer, grandes chances que vai funcionar mesmo assim, mas é boa prática não esquecer, porque isso pode vir a mudar em versões futuras do PHP
    //$dados = $declaracao->fetchAll(PDO::FETCH_ASSOC); //(Usar para mais de um registro)
    $dados = $declaracao->fetchAll(PDO::FETCH_BOUND); //(Usar para mais de um registro) //Se eu usar o PDO::FETCH_BOUND no fetchAll ele vai me devolver um array com um booleano

    echo "<br>Meu carro é um: $marca $modelo";
    display_info($dados, "Da DB");


    $id = 2;
    $declaracao->bindValue(':id', $id, PDO::PARAM_INT);
    $declaracao->execute();
    $dados = $declaracao->fetch(PDO::FETCH_BOUND);
    echo "<br>Meu carro é um: $marca $modelo";
    display_info($dados, "Da DB");


} catch (PDOException $erro) {
    echo "Oops deu o erro: " . $erro->getMessage();
}


include '../todos/footer.php';
?>