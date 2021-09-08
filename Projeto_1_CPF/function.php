<?php
function validar_cpf($cpf_fornecido)
{
//Garantindo que estou trabalhando com um string
//var_dump($cpf_fornecido);
    $cpf_fornecido = (string)$cpf_fornecido;
//var_dump($cpf_fornecido);

//Verificando se o cpf foi fornecido e se são 11 dígitos de 0-9.
    $regEx = '/^[0-9]+$/'; //Expressão regular para verificar se são só números
    if (strlen($cpf_fornecido) !== 11 || !preg_match($regEx, $cpf_fornecido)) {
        echo 'CPF inválido, forneça 11 dígitos de 0-9';
        return false;
    }


//Fornecendo peso de 2 a 10 para meus dígitos e somando
    $soma1 = 0;
    for ($i = 0; $i < 9; $i++) {
        $soma1 += ($cpf_fornecido[$i] * (10 - $i));

    }

    $restanteSomaDiv = $soma1 % 11;
    if ($restanteSomaDiv < 2) {
        $penultDig = 0;
    } else {
        $penultDig = 11 - $restanteSomaDiv;
    }

    $soma2 = 0;
    for ($i = 0; $i < 9; $i++) {
        $soma2 += ($cpf_fornecido[$i] * (11 - $i));

    }

//Repetindo o processo
    $soma2 += $penultDig * 2;
    $restanteSomaDiv2 = $soma2 % 11;
    if ($restanteSomaDiv2 < 2) {
        $ultDig = 0;
    } else {
        $ultDig = 11 - $restanteSomaDiv2;
    }

//Verificando se os dígitos calculados são iguais aos fornecidos e retornando verdadeiro ou falso
    if ($penultDig == $cpf_fornecido[9] && $ultDig == $cpf_fornecido[10]) {

        echo 'Parabéns, seu CPF é valido<br>';
        return true;
    } else {
        echo 'Seu CPF está errado<br>';
        return false;
    }
}
