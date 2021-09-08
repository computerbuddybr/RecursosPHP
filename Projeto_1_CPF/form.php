<form action="#" method="post">
    <input <?php
    if (isset($_POST['submit'])) {
        echo 'value="' . $_POST['cpf'] . '"';
    }
    ?>
            type="number" name="cpf">
    <input type="submit" name="submit" value="Enviar">
</form>
