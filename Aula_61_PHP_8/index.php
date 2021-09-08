<?php
declare(strict_types=1);
include '../todos/functions.php';
include '../todos/header.php';

//Arrays Índices negativos
//$arr = ["Um", "Dois", "Três", "Quatro", "Cinco"];
//display_info($arr, "Do Array");

//$arr[-5] = "Menos 5";
//$arr[] = "Próximo índice";
//$arr[] = "Próximo índice";
//$arr[] = "Próximo índice";
//$arr[] = "Próximo índice";
//$arr[] = "Próximo índice";
//$arr[] = "Próximo índice";
//
//for($i=-5; $i < 2; $i++){
//    echo "<br> $arr[$i]";
//}
//
//display_info($arr, "Do Array 2");


//Union Types
//
class MinhaClasse
{
    public int|float $meuNumero;


    public function definirNumero(int|float $numero) : void{

        $this->meuNumero = $numero;
    }

public
function multiplicarNumero(): int|float{

    return $this->meuNumero * 2;
}



}
//
$obj = new MinhaClasse();
////$obj->definirNumero(2.5);
////echo $obj->multiplicarNumero();
//
////function soma(int|float $a, int|float $b): int|float{
////    return $a + $b;
////}
////
////echo soma(2, 2.5);
//
////Para descobrir a class
////Antes do PHP 8
//echo get_class($obj), "<br>";
////Depois do PHP 8
//echo $obj::class;


//Comparação entre numeros e strings
//$a = "2a";
//$b = 2;
//var_dump($a == $b); //No PHP 7 retornaria verdadeiro, aqui retorna falso pois em vez de transformar o string em número, como era feito antes, ele transforma o número em string
//var_dump($a[0] == $b);

//Expressão match
//Antes
//switch ("1") {
//    case 0:
//        $result = 'Foo';
//        break;
//    case 1:
//        $result = 'Bar';
//        break;
//    case 2:
//        $result = 'Baz';
//        break;
//}
//echo $result;
////Depois
//$res = match (2-2) {
//    5-5 => 'Foo',
//    5-4 => 'Bar',
//    5-3 => 'Baz',
//    default => "Era um string"
//};
//echo "<br>", $res;

//Funções novas

//
//$meuString = "Será que tenho essa palavra aqui";
//$achar = "palavra";
////str_contains: Para verificar se há um string dentro de outro. Antes precisava juntar funções
//if(str_contains($meuString, $achar)){
//    echo "Achei<br>";
//} else {
//    echo "Não achei<br>";
//}
//
////str_starts_with() e str_ends_with(): ver se o string começa ou acaba, respectivamente com outro string
//
//
////$achar = "Será";
//
//if(str_starts_with($meuString, $achar)){
//    echo "Achei<br>";
//} else {
//    echo "Não achei<br>";
//}
//
//
//
//
//
////$achar = "aqui";
//
//if(str_ends_with($meuString, $achar)){
//    echo "Achei<br>";
//} else {
//    echo "Não achei<br>";
//}


//Debug
$meuString = "Será que tenho essa palavra aqui";
//echo gettype($meuString), "<br>";
//echo get_debug_type($meuString);

echo gettype($obj), "<br>";//Método do PHP 7 de ver o tipo da variável
echo get_debug_type($obj);//Novo método do PHP 8, é mais específico e dá o tipo mais detalhadamente dizendo a classe





include '../todos/footer.php';