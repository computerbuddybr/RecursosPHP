<form action="#" method="post">
    <label for="nome">Nome</label>
    <br>
    <input type="text" id="nome" name="nome" value="<?php
    if (isset($_POST['nome'])) {
        echo $_POST['nome'];
    } else {
        echo $controller->db_nome;
    }
    ?>">
    <?php if (isset($controller->nome_erro)) {
        echo $controller->nome_erro;
    } ?>
    <br>
    <label for="cpf">CPF</label>
    <br>
    <input type="text" id="cpf" name="cpf" value="<?php

    if (isset($_POST['cpf'])) {
        echo $_POST['cpf'];
    } else {
        echo $controller->db_cpf;
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
    } else {
        echo $controller->db_email;
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
    } else {
        echo $controller->db_endereco;
    } ?>">
    <?php if (isset($controller->endereco_erro)) {
        echo $controller->endereco_erro;
    } ?>
    <br>
    <br>
    <input type="submit" value="Enviar" name="submit" id="submit">

</form>
