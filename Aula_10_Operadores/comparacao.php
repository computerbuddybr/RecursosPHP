<?php
include '../todos/functions.php';
include '../todos/header.php';

$a = 2;
$b = 4;
$c = '2';s
?>

<table class="tipos">
    <thead>
    <th>Tipo</th>
    <th>Resultado</th>
    <th>Var_dump</th>
    </thead>
    <tr>
        <td>Igual ==</td>
        <td><?php echo $a == $c; ?></td>
        <td><?php var_dump($a == $c); ?></td>
    </tr>
    <tr>
        <td>Idêntico ===</td>
        <td><?php echo $a === $c; ?></td>
        <td><?php var_dump($a === $c); ?></td>
    </tr>

    <tr>
        <td>Não igual != ou <></td>
        <td><?php echo $a != $c; ?></td>
        <td><?php var_dump($a != $c); ?></td>
    </tr>

    <tr>
        <td>Não idêntico !==</td>
        <td><?php echo $a !== $c; ?></td>
        <td><?php var_dump($a !== $c); ?></td>
    </tr>
    <tr>
        <td>Menor que <</td>
        <td><?php echo $a < $b; ?></td>
        <td><?php var_dump($a < $b); ?></td>
    </tr>

    <tr>
        <td>Maior que ></td>
        <td><?php echo $a > $b; ?></td>
        <td><?php var_dump($a > $b); ?></td>
    </tr>
    <tr>
        <td>Menor ou igual que <=</td>
        <td><?php echo $a <= $b; ?></td>
        <td><?php var_dump($a <= $b); ?></td>
    </tr>

    <tr>
        <td>Maior ou igual que <=</td>
        <td><?php echo $a >= $c; ?></td>
        <td><?php var_dump($a >= $c); ?></td>
    </tr>
    <tr>
        <td>Spaceship <=></td>
        <td><?php
            echo 1 <=> 2; // -1
            echo '<br>';
            echo 1 <=> 1; // 0
            echo '<br>';
            echo 2 <=> 1; // 1
            ?></td>
        <td><?php
            var_dump(1 <=> 2);
            echo '<br>';
            var_dump(1 <=> 1);
            echo '<br>';
            var_dump(2 <=> 1);


            ?></td>
    </tr>
    <tr>
        <td>Ternário ?</td>
        <td><?php
            $ternario = ($a >= $c) ? 'Sou maior ou igual' : 'Sou menor';
            echo $ternario;
            ?></td>
        <td><?php var_dump($ternario); ?></td>
    </tr>

</table>


<?php
include '../todos/footer.php';
?>
