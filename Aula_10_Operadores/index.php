<?php
include '../todos/functions.php';
include '../todos/header.php';

?>

<table class="tipos">
    <thead>
    <th>Tipo de Operador</th>
    <th>O que aceita</th>
    <th>Exemplo</th>
    </thead>
    <tr>
        <td>Unário</td>
        <td>Aceita um valor</td>
        <td>! ou ++</td>
    </tr>
    <tr>
        <td>Binário</td>
        <td>Aceita dois valores</td>
        <td>Operadores Aritméticos como + que vai somar dois valores: 2 + 2. Quase todos os valores dessa caegoria.</td>
    </tr>
    <tr>
        <td>Operador ternário</td>
        <td>Que aceita 3 valores</td>
        <td>? e ele trabalharia assim (3 == 2) ? 'Sim' : 'Não'</td>
    </tr>


</table>


<?php
include '../todos/footer.php';
?>
