<?php
include '../todos/functions.php';
include '../todos/header.php';

$idades = [
    'Adriana' => 20,
    'Paula' => 12,
    'Mauricio' => 14,
    'Max' => 28,
    'Juliana' => 62,
    'Sergio' => 50
];
$maiores_de_idade = array_filter($idades, fn($elemento) => $elemento >= 18);
//print_r($maiores_de_idade);
//echo '<br>';

$anos_pra_aposentar = array_map(fn($elemento) => 60 - $elemento, $maiores_de_idade);
//print_r($anos_pra_aposentar);
?>
    <table>
        <thead>
        <th>Nome</th>
        <th>Idade</th>
        <th>Quantos anos para aposentar</th>
        </thead>
        <tbody>

        <?php

        foreach ($maiores_de_idade

                 as $chave => $valor) {
            ?>
            <tr>
                <td>
                    <?php
                    echo $chave;
                    ?>
                </td>
                <td>
                    <?php
                    echo $valor;
                    ?>
                </td>
                <td>
                    <?php
                    echo $anos_pra_aposentar[$chave];
                    ?>
                </td>


            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>

<?php
include '../todos/footer.php';
?>