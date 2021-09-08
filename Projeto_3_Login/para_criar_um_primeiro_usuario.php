<?php
function encriptar_senha($token, $pass)
{

    $hash_extra = $token + (60 * 60 * 10 * 5);//Isto aumenta o meu hash e dificulta descobrir ele pois este pedaço não é guardado na db mas no código
    $salty = dechex($hash_extra) . $pass;
    $senha_ecriptada = hash('sha1', $salty);
    return $senha_ecriptada;
}

function encriptar_senha_para_db()
{
    //Vamos criar um hash
    date_default_timezone_set('US/Eastern'); //mudar o fuso dificulta a possibilidade de achar seu hash
    $token = time(); //Isto deve ser guardado no token que vai para a base de dados.
    echo "Token: $token <br>";

    //Agora eu rodo a criptografia com o token e a senha que eu peguei e guardei na db
    $senha_encriptada = encriptar_senha($token, 'adriana');

    return $senha_encriptada;

}

echo "Created at: " . time() . "<br>";

echo "Senha encriptada: " . encriptar_senha_para_db();


?>
