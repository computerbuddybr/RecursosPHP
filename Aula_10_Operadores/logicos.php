<?php
include '../todos/functions.php';
include '../todos/header.php';

$a = 2;
$b = '2';
$c = 4;
$e = 4;
$d = false;
?>

<table class="tipos">
    <thead>
    <th>Tipo</th>
    <th>Resultado</th>
    <th>Var_dump</th>
    </thead>

    <tr>
        <td>E (and ou &&)</td>
        <td><?php
            echo $a < $c && $a == $b && $c === $e;
            echo '<br>';
            echo $a < $c and $a == $b;
            ?></td>
        <td><?php
            var_dump($a < $c && $a == $b);
            echo '<br>';
            var_dump($a < $c and $a == $b);
            ?></td>
    </tr>
    <tr>
        <td>OU (or ou ||)</td>
        <td><?php
            echo $a < $c || $a > $b;
            echo '<br>';
            echo $a < $c or $a == $b;
            ?></td>
        <td><?php
            var_dump($a < $c || $a > $b);
            echo '<br>';
            var_dump($a < $c or $a == $b);
            ?></td>
    </tr>
    <tr>
        <td>OU exclusivo (xor)</td>
        <td><?php
            echo $a < $c xor $a > $b;
            echo '<br>';
            echo $a < $c xor $a == $b;
            ?></td>
        <td><?php
            var_dump($a < $c xor $a > $b);
            echo '<br>';
            var_dump($a < $c xor $a == $b);
            ?></td>
    </tr>

    <tr>
        <td>Não</td>
        <td><?php
            echo !$d;


            ?></td>
        <td><?php
            var_dump(!$d);

            ?></td>
    </tr>

</table>


<?php
include '../todos/footer.php';
?>
