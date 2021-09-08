<form action="#" method="post">
    <label for="nome">Nome</label>
    <br>
    <input type="text" id="nome" name="nome" value="<?php
    if (isset($_POST['nome'])) {
        echo $_POST['nome'];
    }
    ?>">
    <?php if (isset($controller->nome_erro)) {
        echo $controller->nome_erro;
    } ?>
    <br>
    <br>
    <label for="usuario">Usuário</label>
    <br>
    <input type="text" id="usuario" name="usuario" value="<?php
    if (isset($_POST['usuario'])) {
        echo $_POST['usuario'];
    }
    ?>">
    <?php if (isset($controller->usuario_erro)) {
        echo $controller->usuario_erro;
    } ?>
    <br>
    <label for="cpf">CPF</label>
    <br>
    <input type="text" id="cpf" name="cpf" value="<?php

    if (isset($_POST['cpf'])) {
        echo $_POST['cpf'];
    }

    ?>">
    <?php if (isset($controller->cpf_erro)) {
        echo $controller->cpf_erro;
    }
    if (isset($controller->cpf_invalido)) {
        echo $controller->cpf_invalido;
    }
    ?>
    <br>
    <label for="email">E-mail</label>
    <br>
    <input type="text" id="email" name="email" value="<?php
    if (isset($_POST['email'])) {
        echo $_POST['email'];
    } ?>">
    <?php if (isset($controller->email_erro)) {
        echo $controller->email_erro;
    } ?>
    <br>
    <label for="Endereço">Endereço</label>
    <br>
    <input type="text" id="endereco" name="endereco" value="<?php
    if (isset($_POST['endereco'])) {
        echo $_POST['endereco'];
    } ?>">
    <?php if (isset($controller->endereco_erro)) {
        echo $controller->endereco_erro;
    } ?>
    <br>
    <br>
    <input type="submit" value="Enviar" name="submit" id="submit">

</form>
