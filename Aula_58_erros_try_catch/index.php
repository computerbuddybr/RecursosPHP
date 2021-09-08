<?php
include '../todos/functions.php';
include '../todos/header.php';

//echo 'Aqui vem meu include<br>';
//include 'include.php';
//echo 'Aqui é depois do meu include<br>';
//try{
//    echo intdiv(7,0);
//} catch (Error $erro){
//    echo 'Meu erro foi:  ' . $erro->getMessage() . '<br>';
//    //display_info($erro, 'Do erro');
//}
//echo "Woopie, rodou";
//$minha_var = 'Adriana';
//$minha_var = 'Paula';
//try {
//    echo $minha_var . '<br>';
//    if($minha_var !== 'Adriana'){
//        throw new Exception('Você não está autorizado<br>');
//    }
//    echo 'Legal, funcionei<br>';
//
//} catch (Exception $erro) {
//
//    echo 'Meu erro foi:  ' . $erro->getMessage() . '<br>';
//
//} finally {
//    echo 'Consegui rodar<br>';
//}

//
//try{
//    echo intdiv(200,0);
//} catch(Throwable $erro){
//    echo '<br>Do throwable 1: ' . $erro->getMessage();
//}
//catch(ArithmeticError $er){
//    echo '<br>Do ArithmeticError 1: ' . $er->getMessage();
//}
//catch(DivisionByZeroError $e){
//    echo '<br>Do DivisionByZeroError 1: ' . $e->getMessage();
//}
//
////echo '<br>----<br>';
//try{
//    echo intdiv(200,0);
//
//}
//catch(DivisionByZeroError $e){
//    echo '<br>Do DivisionByZeroError 2: ' . $e->getMessage();
//}
//catch(ArithmeticError $er){
//    echo '<br>Do ArithmeticError 2: ' . $er->getMessage();
//}
//catch(Throwable $erro){
//    echo '<br>Do throwable 2: ' . $erro->getMessage();
//}
//try{
//   throw new Exception('Este erro é um Exception');
//    //throw new Error('Este erro é um Erro');
//    //intdiv(200,0);
//
//} catch(Error $e){
//    echo '<br>Do Error: '. $e->getMessage();
//} catch (Exception $e){
//    echo '<br>Do Exception: '. $e->getMessage();
//} catch (Throwable $e){
//    echo '<br>Do Throwable: '. $e->getMessage();
//}


//Criando uma classe para lidar com um ero específico.

class PessoaAutorizadaException extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        $newMessage = "<br>Erro personalizado: $message<br>Código personalizado: $code<br>----<br>";
        parent::__construct($newMessage, $code, $previous);
    }
}

/**
 * A função vai ver se a pessoa é a pessoa autorizada
 * @param $string
 */
function autorizada($string)
{
    if ($string !== 'Adriana') {
        throw new PessoaAutorizadaException('Você não é a Adriana', 500);
    }
    return '<br>----<br>Yay, você é a Adriana<br>----<br>';
}

$pessoas = ['Paula', 'Adriana', 'João'];

foreach ($pessoas as $pessoa) {
    try {
        echo autorizada($pessoa);
    } catch (PessoaAutorizadaException $e) {
        echo '<br>----<br>Deu erro: ' . $e->getMessage();
    }
}


include '../todos/footer.php';
?>
