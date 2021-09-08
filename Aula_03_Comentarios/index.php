<?php
include '../todos/header.php';
include '../todos/functions.php';

// Comentário de linha
# Comentário de linha

/*
    Aqui tenho mais de uma linha comentada
    Segunda linha
*/
/*
 * Aqui é o modo que o PHPStorm faz o comentário se você fizer somente /* e enter
 */
/**
 * No PHPStorm se eu escrevo a barra, dois asteriscos e dou enter ele cria um tipo * de comentário que o programa depois vai interpretar como documentação.
 */
//TODO: Mostrar o todo para meus alunos (este tipo de comentário em alguns programas permite deixar lembretes do que falta fazer.

phpinfo();

/**
 * Função que recebe um nome e faz um echo.
 * @param $nome
 */
function ola($nome)
{
    echo 'Olá, ' . $nome;
}

ola('Adriana');


include '../todos/footer.php';
?>
