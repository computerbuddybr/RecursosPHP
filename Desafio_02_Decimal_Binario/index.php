<?php
declare(strict_types=1);
include '../todos/functions.php';
include '../todos/header.php';


function decimal_binario(int $numero)
{
    //Verificação se é um número maior que zero
    if ($numero <= 0) {
        echo "Valor inválido";
        return;
    }
    $numero_temp = $numero;
    $binario = "";
    for (; $numero_temp > 0;) {
        $restante = $numero_temp % 2;
        //a função de php floor vai arredondar um valor para baixo, que é o que queremos aqui

        $numero_temp = floor($numero_temp / 2);

        echo "Numero temp: $numero_temp<br>";


        if ($numero_temp > 0) {
            //Se meu $numero_temp é maior que 0, ainda não cheguei no último dígito
            $binario = $restante . $binario;
            echo "Restante: $restante<br>";
        } else {
            //Sendo meu $numero_temp 0, então cheguei no último dígito que será sempre 1
            $binario = "1" . $binario;
        }


    }
    return $binario;
}

$meu_numero = decimal_binario(0);
echo $meu_numero;


include '../todos/footer.php';
?>

