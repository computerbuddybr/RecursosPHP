<form action="#" method="post">
    <label for="usuario">Usuário</label>
    <br>
    <input type="text" name="usuario" id="usuario" value="<?php
    if (isset($_POST['usuario'])) {
        echo $_POST['usuario'];
    }
    ?>">
    <?php if (isset($logado->usuario_erro)) {
        echo "<br>", $logado->usuario_erro;
    } ?>
    <br>
    <label for="senha">Senha</label>
    <br>
    <input type="password" name="senha" id="senha"
           value="<?php
           if (isset($_POST['senha'])) {
               echo $_POST['senha'];
           }
           ?>">
    <?php if (isset($logado->senha_erro)) {
        echo "<br>", $logado->senha_erro, "<br>";
    } ?>
    <input type="submit" name="submit" id="submit">
</form>
