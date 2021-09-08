<?php
include '../todos/functions.php';
include '../todos/header.php';
include 'Model/Carro.php';
include 'Model/ProcessarFormCarro.php';

$hondaFit = new Carro(2010, 'Fit', 'Honda', 'Azul', 'Adriana', '20.000,00');
$fordFocus = new Carro(2020, 'Focus', 'Ford', 'Vermelho', 'Marcos', '100.000,00');
//echo $hondaFit->propriedadeStatic;
echo $hondaFit->souStatic();
//display_info($hondaFit, 'Var_dump do meu Objeto');

//Para mostrar exemplo de propriedade criada em método
//$hondaFit = new Carro();
//$fordFocus = new Carro();
//$hondaFit->criandoNovasPropriedades();
//display_info($hondaFit, 'Var_dump do meu Objeto');


//Carro::souStatic();
//$hondaFit->souStatic();
//
//echo Carro::$propriedadeStatic;
//echo '<br>';
//echo $hondaFit->propriedadeStatic;
//echo '<br>';

//Operador de tipo
var_dump($hondaFit instanceof Carro);
echo '<br>';
var_dump($hondaFit instanceof ProcessarFormCarro);
echo '<br>';
$variavel = 'teste';
var_dump($variavel instanceof Carro);


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
    <tr>
        <td>
            <?php echo $hondaFit->marca; ?>
        </td>
        <td>
            <?php echo $hondaFit->modelo; ?>
        </td>
        <td>
            <?php echo $hondaFit->anoDeFabricacao; ?>
        </td>
        <td>
            <?php echo $hondaFit->cor; ?>
        </td>
        <td>
            <?php //echo $hondaFit->nomeDoDono;
            $hondaFit->mostrarInformação('nomeDoDono');

            ?>
        </td>
        <td>
            R$ <?php //echo $hondaFit->valorDoCarro;
            $hondaFit->mostrarInformação('valorDoCarro');
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <?php echo $fordFocus->marca; ?>
        </td>
        <td>
            <?php echo $fordFocus->modelo; ?>
        </td>
        <td>
            <?php echo $fordFocus->anoDeFabricacao; ?>
        </td>
        <td>
            <?php echo $fordFocus->cor; ?>
        </td>
        <td>
            <?php $fordFocus->mostrarInformação('nomeDoDono');

            ?>
        </td>
        <td>
            R$ <?php $fordFocus->mostrarInformação('valorDoCarro');
            ?>
        </td>
    </tr>
</table>


<?php
//unset($hondaFit);
//unset($fordFocus);
//var_dump($hondaFit);
include '../todos/footer.php';
?>
