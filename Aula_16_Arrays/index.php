<?php
include '../todos/functions.php';
include '../todos/header.php';
include 'Pessoa.php';

$objeto = new Pessoa('Adriana', 'Cerdeira', 1980);
//Array considerado multidimensional por ter um array dentro de outro
$array_simples = [
    "Adriana",
    1980,
    $objeto,
    ['Sou um array de dentro', true]
];
$array_associativo = [
    "nome" => "Adriana",
    "ano de nascimento" => 1980,
    "array" => ["Adriana", 1980],
    "objeto" => $objeto,
    "Solto",
    5 => "Cinco"
];
//Antes do PHP 5.4 se criavam arrays assim
$array_simples_antigo = array('Adriana', 'Cerdeira', 5);
$array_associativo_antigo = array(
    'nome' => 'Adriana',
    'sobrenome' => 'Cerdeira',
    'numero de cursos' => 6
);
?>
<pre>
    <?php
    //    var_dump($array_simples);
    //    echo '<br><br>';
    //    var_dump($array_associativo);

    //    echo $array_associativo['ano de nascimento'], '<br>';
    //    echo $array_simples[1], '<br>';
    //    echo $array_simples[3][1], '<br>'; //Para pegar o dado de um array dentro de outro primeiro eu uso o indice de onde está meu array para capturar o array e depois o indice do meu elemento dentro do array interno
    //    echo $array_associativo[1], '<br>';

    //Alterando elementos
    //      echo $array_associativo['ano de nascimento'], '<br>';
    //      $array_associativo['ano de nascimento'] = 'Novo ano';
    //      echo $array_associativo['ano de nascimento'], '<br>';
    //Criando novos valores
    //    $array_associativo['novo valor'] = 'Olha eu aqui';
    //    $array_simples[5] = 'Sou novo';
    //    $array_simples[] = 'Fiz sem chave';
    ////    //$array_associativo[2] = 'Começo contador';
    ////    $array_associativo[5] = "Cinco";
    //     $array_associativo[] = 'Fiz sem chave';
    //
    $array_baguncado = [
        1 => "um",
        7 => "sete",
        2 => "dois"
    ];
    $array_exemplo = [0, 1, 2, 3, 4];
    //    $array_baguncado[] = "novo valor";
    //    var_dump($array_baguncado);
    //var_dump($array_exemplo);
    //    echo '<br><br>';
    //    var_dump($array_associativo);
    //    //Funções úteis
    //    unset($array_exemplo[4]);
    //    var_dump($array_exemplo);
    //    $array_exemplo[] = 'Adicionei depois do unset';
    //    echo '<br>';
    //    var_dump($array_exemplo);
    //    echo $array_exemplo[4];

    //    print_r($array_baguncado);
    //    sort($array_baguncado);
    //    print_r($array_baguncado);
    //
    //    print_r($array_associativo);
    //    sort($array_associativo);
    //    print_r($array_associativo);
    //Tirar elemento do final
    //    var_export($array_exemplo);
    //    echo '<br>';
    //    $elemento_popado = array_pop($array_exemplo);
    //    var_dump($elemento_popado);
    //    echo '<br>';
    //    var_export($array_exemplo);
    // //Adicionar elemento ao final
    //    array_push($array_exemplo, 'Entrei aqui no finalzinho', 'Segundo valor');
    //    var_dump($array_exemplo);

    //    array_push($array_associativo, 'Entrei aqui no finalzinho', 'Segundo valor');
    //    var_dump($array_associativo);
    //
    //    //Outra maneira de apresentar informações
    //
    //    var_export($array_simples);
    $array_ass_pra_ser_cortado = [
        "zero" => 0,
        "um" => 1,
        "dois" => 2,
        "três" => 3,
        "quatro" => 4
    ];
    //print_r(array_slice($array_ass_pra_ser_cortado, 2));
    $array_pra_ser_cortado = [0, 1, 2, 3, 4, 5, 6, 7, 8];
    //Array slice
    //print_r($array_pra_ser_cortado);
    echo '<br>';
    //    $novo_pedaco = array_slice($array_pra_ser_cortado, 2);
    //    echo '<br>';
    ////
    //        $novo_pedaco = array_slice($array_pra_ser_cortado, 2,4);
    //          $novo_pedaco = array_slice($array_pra_ser_cortado, 2,-2);
    //          $novo_pedaco = array_slice($array_pra_ser_cortado, -4,2);
    //    //print_r($array_pra_ser_cortado);
    //    echo 'Meu pedaço cortado: <br>';
    //    print_r($novo_pedaco);
    ////
    //
    //    //Array shift, unshift
    //     $novo_pedaco = array_shift($array_pra_ser_cortado);
    //        $novo_pedaco = array_shift($array_ass_pra_ser_cortado);
    //      $novo_pedaco = array_unshift($array_pra_ser_cortado, 'Sou novo no unshift', 'Ó eu aqui também');
    //$novo_pedaco = array_unshift($array_ass_pra_ser_cortado, 'Sou novo no unshift', 'Ó eu aqui também');
    // $novo_pedaco = array_unshift($array_ass_pra_ser_cortado, 'um' =>'Sou novo no unshift', 'dois' => 'Ó eu aqui também');


    //print_r($array_pra_ser_cortado);
    //     print_r($array_ass_pra_ser_cortado);
    //      print_r($novo_pedaco);
    //echo '<br>', $novo_pedaco;
    //
    //    //Transformando em strings
    //
    //     $array_pra_string = implode(', ', $array_pra_ser_cortado);
    //////
    //      //print_r($array_pra_ser_cortado);
    //      echo '<br>';
    //      print_r($array_pra_string);
    //      echo '<br>';

    //Transformando string em array
    $meu_string = '0,1,2,3,4,5,6';
    //$meu_novo_arr = explode(',', $meu_string);
    //$meu_novo_arr = explode($meu_string);
    //print_r($meu_string);
    //    echo '<br>';
    //    print_r($meu_novo_arr);


    //    //print_r($novo_pedaco);
    //    var_dump($novo_pedaco);
    //
    //    //Contando elementos do array
    //    echo count($array_pra_ser_cortado);
    //    echo '<br>';
    //    echo sizeof($array_pra_ser_cortado);


    //Usando uma variavel como chave
    //        echo '<br><br>';
    //        var_dump($array_associativo);
    //        $minha_chave = 'ano de nascimento';
    //        echo '<br>', $array_associativo[$minha_chave];


    //Operadores de Array

    $array1 = ['nome' => 'Adriana', 'sobrenome' => 'Cerdeira',];
    $array2 = ['sobrenome' => 'Cerdeira', 'nome' => 'Adriana'];
    $array_problema = ['nome' => 'Oops', 'idade' => 28];
    $array_novo = ['Web Dev', 1980, 6];
    $array_simples_novo = ['Esse vai?', 'Será?', 'É o terceiro', 'Mas o quarto foi'];

    //    //Operador de união
    //Cuidado pois se houverem chaves iguais nos dois array o que vai acontecer é a substituição do primeiro valor pelo segundo. Inclusive em arrays simples, com índice isso vai acontecer pois os indices do primeiro serão numerados e os índices do segundo equivalentes serão considerados como novos valores para aqueles índices. Neste caso use array_merge porque aí sim se unirão todos os elementos.
    //    $uniao = $array1 + $array_novo;
    //    //Operador de igualdade
    //    $igualdade = $array1 == $array2;
    //    //Operador de identidade
    //    $identidade = $array1 === $array2;
    //    //Operador de desigualdade
    //    $desigualdade = $array1 != $array2;
    //    $desigualdade2 = $array1 <> $array2;
    //    //Operador de Não identidade
    //    $nao_identico = $array1 !== $array2;

    //echo 'União<br>';
    //var_dump($uniao);
    //    var_dump($array1 + $array_problema);
    //    echo 'Merge<br>';
    //    var_dump(array_merge($array1, $array_problema));
    //    echo 'União<br>';
    //    var_dump($array_novo + $array_simples_novo);
    //    echo 'Merge<br>';
    //    var_dump(array_merge($array_novo, $array_simples_novo));
    //    echo '<br>';
    //    echo 'Igualdade<br>';
    //    var_dump($igualdade);
    //    echo '<br>';
    //    echo 'Identidade<br>';
    //    var_dump($identidade);
    //    echo '<br>';
    //    echo 'Desigualdade<br>';
    //    var_dump($desigualdade);
    //    echo '<br>';
    //    var_dump($desigualdade2);
    //    echo '<br>';
    //    echo 'Não idêntico<br>';
    //    var_dump($nao_identico);
    //    echo '<br>';


    ?>

</pre>


<?php
include '../todos/footer.php';
?>
