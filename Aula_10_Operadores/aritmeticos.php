<?php
include '../todos/functions.php';
include '../todos/header.php';

$soma = 2 + 2;
$subtracao = 3 - 2;
$multiplicacao = 3 * 2;
$divisao = 3 / 2;
$identidade = '-10';
$modulo = 10 % 3;
$exponencial = 2 ** 3;
?>

<table class="tipos">
    <thead>
    <th>Tipo</th>
    <th>Resultado</th>
    <th>Var_dump</th>
    </thead>
    <tr>
        <td>Soma</td>
        <td><?php echo $soma; ?></td>
        <td><?php var_dump($soma); ?></td>
    </tr>
    <tr>
        <td>Subtração</td>
        <td><?php echo $subtracao; ?></td>
        <td><?php var_dump($subtracao); ?></td>
    </tr>
    <tr>
        <td>Multiplicação</td>
        <td><?php echo $multiplicacao; ?></td>
        <td><?php var_dump($multiplicacao); ?></td>
    </tr>
    <tr>
        <td>Divisão</td>
        <td><?php echo $divisao; ?></td>
        <td><?php var_dump($divisao); ?></td>
    </tr>
    <tr>
        <td>Módulo</td>
        <td><?php echo $modulo; ?></td>
        <td><?php var_dump($modulo); ?></td>
    </tr>
    <tr>
        <td>Identidade</td>
        <td><?php echo +$identidade; ?></td>
        <td><?php var_dump(+$identidade); ?></td>
    </tr>
    <tr>
        <td>Negação</td>
        <td><?php echo -$identidade; ?></td>
        <td><?php var_dump(-$identidade); ?></td>
    </tr>

    <tr>
        <td>Exponencial</td>
        <td><?php echo $exponencial; ?></td>
        <td><?php var_dump($exponencial); ?></td>
    </tr>

</table>


<?php
include '../todos/footer.php';
?>
