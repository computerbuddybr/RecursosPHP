<button id="create" class="btn btn-success"><a href="index.php?page=create" target="_blank"><i
                class="fas fa-user-plus"></i> Adicionar novo Cliente</a></button>
<div class="clear_float"></div>
<table>
    <thead>
    <th>Nome</th>
    <th>E-mail</th>
    <th>CPF</th>
    <th>Endereço</th>
    <th>Atualizar</th>
    <th>Apagar</th>
    </thead>
    <tbody>
    <?php
    foreach ($dados as $dado) {
        //display_info($dado, 'De cada dado');

        ?>

        <tr>
            <td>
                <?php echo $dado['nome']; ?>
            </td>
            <td>
                <?php echo $dado['email']; ?>
            </td>
            <td>
                <?php

                $i = 0;
                $limite = 3;
                $cpf = "";
                for ($a = 0; $a < 3; $a++) {
                    if ($a != 0) {
                        $cpf .= ".";
                    }
                    for (; $i < $limite; $i++) {
                        $cpf .= $dado['cpf'][$i];
                    }

                    $limite += 3;
                }
                $cpf .= "-" . $dado['cpf'][9] . $dado['cpf'][10];

                echo $cpf;

                ?>
            </td>
            <td>
                <?php echo $dado['endereco']; ?>
            </td>
            <td>
                <a href="index.php?page=update&id=<?php echo $dado['id']; ?>" target="_blank"> <i
                            class="fas fa-user-edit"></i></a>
            </td>
            <td>
                <a class="red" href="index.php?page=delete&id=<?php echo $dado['id']; ?>" target="_blank"><i
                            class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
