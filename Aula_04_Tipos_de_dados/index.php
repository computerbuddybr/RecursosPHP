<?php
include '../todos/header.php';
include 'Pessoa.php';


$string = 'sou uma cadeia de caracteres';
echo $string[8], '<br>';
$string2 = 'Estou dando escape \' nas aspas';
$integer = 2;
$float = 5.5;
$float2 = 5.0;
$booleano = false;
$nulo = NULL;
$array_simples = [
    "Adriana",
    1980
];
$array_associativo = [
    "nome" => "Adriana",
    "ano de nascimento" => 1980
];
$objeto = new Pessoa('Adriana', 'Cerdeira', 1980);
//Funções úteis de string
$nome = 'Adriana';
$profissao = 'Web Dev';

$novo = "Meu nome é $nome e eu sou {2+2}s";
$lista = explode(" ", $novo); //Separa os caracteres pelo delimitador em elementos de um array
var_dump($lista);

echo '<br>', strtoupper($string); //Todas as letras maiúsculas
echo '<br>';
echo mb_strtolower('OLÁ', "utf-8"); //Todas as letras minúsculas
echo '<br>';
echo strlen('OLÁ'); //Comprimento do string, caracteres especiais como acento contam podem dificultar isto pois contam separado
echo '<br>';
echo mb_strlen('Olá', "utf-8"); //Para resolver o problema dos strlen quando se tem caracteres especiais. O segundo parâmetro aceito é o encoding
echo '<br>';
echo ucfirst($string); //Somente a primeira letra maiúscula
echo '<br>';
echo ucwords($string); //Primeira letra de cada palavra maiúscula
echo '<br>';
echo substr($string, 2, 4);//Primeiro argumento o string, 2º argumento o índice onde começar a cortar e 3º o comprimento, são 3 sem o terceiro
echo '<br>';
var_dump(implode(', ', $array_simples));//Junta os elementos de um array em um string
echo '<br>';
echo strpos($string, 'o');//Encontra a primeira ocorrência em um string


?>
<table class="tipos">
    <thead>
    <th>Tipo</th>
    <th>Descrição</th>
    <th>Exemplo</th>
    <th>Observação</th>
    <th>Var_dump</th>
    </thead>
    <tr>
        <td>Integer</td>
        <td>Números inteiros, positivos ou negativos</td>
        <td><?php echo $integer; ?></td>
        <td></td>
        <td><?php var_dump($integer); ?></td>
    </tr>
    <tr>
        <td>Float</td>
        <td>números que incluirão casas decimais, positivos ou negativos</td>
        <td><?php echo $float, '<br />', $float2; ?></td>
        <td></td>
        <td><?php var_dump($float);
            echo '<br>';
            var_dump($float2);


            ?></td>
    </tr>
    <tr>
        <td>String</td>
        <td>Cadeia de caracteres usadas para textos</td>
        <td><?php echo $string, '<br>', $string2, '<br>', $string[1]; ?></td>
        <td>Ao somar dois strings haverá coerção de tipo: <?php var_dump('2' + '2'); ?></td>
        <td><?php var_dump($string); ?></td>
    </tr>
    <tr>
        <td>Booleano</td>
        <td>Tipo de dado lógico que pode ser somente verdadeiro ou falso</td>
        <td><?php echo $booleano; ?></td>
        <td>Booleanos podem ser: true ou false ou 1 (true) 0 (false)</td>
        <td><?php var_dump($booleano); ?></td>
    </tr>
    <tr>
        <td>Nulo</td>
        <td>Que não existe, pode ser por não ter sido declarado ou forçadamente nulo</td>
        <td><?php echo $nulo; ?></td>
        <td>Onde dei simplesmente um echo não apareceu</td>
        <td><?php var_dump($nulo); ?></td>

    </tr>
    <tr>
        <td>Array</td>
        <td>Coleção ou mapa ordenado com chave e valor.
        </td>
        <td><?php echo $array_associativo['nome']; ?></td>
        <td></td>
        <td><?php echo '<pre>';
            var_dump($array_simples);
            var_dump($array_associativo);
            echo '</pre>';


            ?></td>
        <td></td>
    </tr>
    <tr>
        <td>Objeto</td>
        <td>Criado a partir de uma Classe que vai servir de mapa, modelo para a criação de objetos diferentes com as
            mesmas
            propriedades e métodos.
        </td>
        <td><?php echo $objeto->nome; ?></td>
        <td></td>
        <td><?php echo '<pre>';
            var_dump($objeto);
            echo '<br>';
            var_dump(get_class_methods($objeto));
            echo '</pre>';


            ?></td>
        <td></td>
    </tr>
</table>


<?php
include '../todos/footer.php';
?>
