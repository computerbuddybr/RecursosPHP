<?php
include '../todos/functions.php';
include '../todos/header.php';
//Criando o arquivo
//https://www.php.net/manual/pt_BR/function.fopen.php

//$arquivo = fopen('pra_ler.txt', 'w');
////$arquivo = fopen('pra_ler.txt', 'a');
////
//////Escrevendo no arquivo
//fwrite($arquivo, "Estou escrevendo a partir da primeira linha.\nE agora a segunda linha.\n");
////
////
//////Escrevendo mais uma linha com o arquivo aberto
//$str = "Sou a terceira linha\n";
//fwrite($arquivo, $str);
//
//for ($i = 1; $i < 5; $i++) {
//    fwrite($arquivo, "Nova linha $i\n");
//}
////
////
//////Fechando o arquivo
//fclose($arquivo);
////
//////Teste reabertura
//
//$reabrindo_arquivo = fopen('pra_ler.txt', 'a+');
//$str2 = "Reabri o arquivo\n";
//fwrite($reabrindo_arquivo, $str2);
////echo "Posição: ", ftell($reabrindo_arquivo);
//rewind($reabrindo_arquivo);
////
//$conteudo = fread($reabrindo_arquivo, filesize('pra_ler.txt'));
//echo '<pre>';
//echo $conteudo;
//echo '</pre>';
////
//fclose($reabrindo_arquivo);
////
////
////
//////Lendo o arquivo
//$vamos_ler = fopen('pra_ler.txt', 'r');
//$conteudo = fread($vamos_ler, filesize('pra_ler.txt'));
////echo fread($vamos_ler, 5);
////echo '<br><br>';
////echo fread($vamos_ler, 5);
//echo '<h1 style="color:red;">Este é só read</h1>';
//echo '<pre>';
//
//echo $conteudo;
////display_info($conteudo, "Do arquivo");
//echo '</pre>';
//fclose($vamos_ler);


//Lógica para não sobrescrever arquivo com file_exists, há também uma flag x para abrir e escrever somente se o arquivo não existe e dando um erro se ele existir. A flag vai para o programa por isso pode ser mais interessante usar a lógica abaixo

//if(file_exists('pra_ler.txt')){
//    fopen('pra_ler_Copia.txt', 'w');
//} else {
//    fopen('pra_ler.txt', 'w');
//}

//Usando file para ler.
//$arquivo_file = file('pra_ler.txt');
////
////display_info($arquivo_file, 'Do file');
//
////Aqui pode ser interessante dai fazer um foreach
//foreach ($arquivo_file as $linha){
//    echo "<p>$linha</p>";
//}

//Outra maneira de ler cada linha
//$arquivo_linha_linha = fopen('pra_ler.txt', 'r');
//
//do{
//    $linha = fgets($arquivo_linha_linha);
//    echo '<p>' . $linha . '</p>';
//    //var_dump($linha);
//} while($linha);
//echo '<br>----<br>';
//
//fclose($arquivo_linha_linha);
//
////Com feof ao chegar no end of file o feof vai retornar verdadeiro
//$arquivo_feof = fopen('pra_ler.txt', 'r');
//while(!feof($arquivo_feof)){
//    echo '<p>' . fgets($arquivo_feof) . '</p>';
//}
//fclose($arquivo_feof);
//echo '<br>----<br>';
////Lendo cada caractere
$arquivo_caractere = fopen('pra_ler.txt', 'r');
////while(!feof($arquivo_caractere)){
////    echo fgetc($arquivo_caractere), "<br>" ;
////}
do{
    $linha = fgetc($arquivo_caractere);
    echo '<p>' . $linha . '</p>';
    var_dump($linha);
} while($linha);
//fclose($arquivo_caractere);


include '../todos/footer.php';
?>