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
$sqlBuscaPrepared = "SELECT marca, ano, modelo, proprietario, valor FROM carros WHERE id=:id";
try {
    $declaracao = $conexao->prepare($sqlBuscaPrepared);

    $declaracao->bindParam(':id', $id, PDO::PARAM_INT);

    $declaracao->execute();

//Fazendo Bind das colunas com seu nome como primeiro argumento, posso também com a ordem das colunas e como segundo argumento a variável na qual o nome será ligado
    $declaracao->bindColumn('marca', $marca);
    $declaracao->bindColumn('modelo', $modelo);
    $declaracao->bindColumn('ano', $ano);
    $declaracao->bindColumn('proprietario', $proprietario);
    $declaracao->bindColumn('valor', $valor);
//Pegando os dados
    //Neste caso, como dei bind das colunas uso o estilo PDO::FETCH_BOUND
    $dados = $declaracao->fetch(PDO::FETCH_BOUND);

    echo "<br>Meu nome é $proprietario e meu carro é um: $marca $modelo, do ano $ano, que custa R$$valor";


//Exemplo do bind_param sendo reusado
    $id = 2;
    $declaracao->execute();

//Pegando os dados
    $dados = $declaracao->fetch(PDO::FETCH_BOUND);

    echo "<br>Meu nome é $proprietario e meu carro é um: $marca $modelo, do ano $ano, que custa R$$valor";

    echo "<br>Meu for loop<br>";

    for ($id = 1; $id < 4; $id++) {
        $declaracao->execute();
        $dados = $declaracao->fetch(PDO::FETCH_BOUND);

        echo "<br>Meu nome é $proprietario e meu carro é um: $marca $modelo, do ano $ano, que custa R$$valor";

    }


} catch (PDOException $erro) {
    echo "Oops deu o erro: " . $erro->getMessage();
}


include '../todos/footer.php';
?>