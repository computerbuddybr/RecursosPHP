<?php
if ($dados->dados){

?>
<table>
    <thead>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Ano</th>
    <th>Cor</th>
    <th>Dono</th>
    <th>Valor</th>
    </thead>
    <tbody>
    <?php
    foreach ($dados->dados as $dado) {


        //display_info($dado, 'No for each');
        ?>

        <tr>
            <td>
                <?php echo $dado['marca']; ?>
            </td>
            <td>
                <?php echo $dado['modelo']; ?>
            </td>
            <td>
                <?php echo $dado['ano']; ?>
            </td>
            <td>
                <?php echo $dado['cor']; ?>
            </td>
            <td>
                <?php echo $dado['proprietario'];

                ?>
            </td>
            <td>
                R$ <?php echo $dado['valor'];

                ?>
            </td>
        </tr>
        <?php
    }

    }
    ?>
    </tbody>
</table>