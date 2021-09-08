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
    <tr>
        <td>
            <?php echo $carro_view->form->marca; ?>
        </td>
        <td>
            <?php echo $carro_view->form->modelo; ?>
        </td>
        <td>
            <?php echo $carro_view->form->ano; ?>
        </td>
        <td>
            <?php echo $carro_view->form->cor; ?>
        </td>
        <td>
            <?php echo $carro_view->form->dono;

            ?>
        </td>
        <td>
            R$ <?php echo $carro_view->form->valor;
            //            if((int) $carro_view->form->valor === 20000){
            //                echo 'Que preço bom';
            //            }
            ?>
        </td>
    </tr>
    </tbody>
</table>