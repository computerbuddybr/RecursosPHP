<?php
include 'app/Model/Login.php';

class LoginController extends Login
{
    public function __construct()
    {
        parent::__construct();
        if (isset($_POST["submit"])) {
            if ($this->validarCampos()) {
                $this->atribuirDadosDeForm();
                $valido = $this->estou_autorizado($this->form_usuario);

                if ($valido) {

                    $this->logado = true;
                    setcookie("usuario", $this->db_usuario, time() + (60 * 60 * 24 * 30));
                    $_SESSION["nome"] = $this->db_nome;


                } else {
                    echo '<h1>Usuário ou senha incorretos</h1>';
                    $this->logado = false;
                }
            } else {
                $this->logado = false;
            }
        } else {
            if (isset($_COOKIE["usuario"]) && $_COOKIE["usuario"] != '') {
                //Considerar logado e buscar info
                $dados = $this->readOneUser($this->sanitize($_COOKIE["usuario"]));
                $this->atribuirDadosDeDB($dados[0]);
                $_SESSION["nome"] = $this->db_nome;
                $this->logado = true;

            } else {
                //Considerar deslogado
                $this->logado = false;
            }
        }
    }
}