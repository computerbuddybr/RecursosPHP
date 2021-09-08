<?php
include 'app/Model/Clientes.php';


class CreateController extends Clientes
{

    public function __construct()
    {
        parent::__construct();
        $this->processForm();

    }

    private function processForm()
    {
        if (isset($_POST['submit'])) {
            $valido = $this->validarCampos();

            if ($valido) {

                $this->atribuirDadosDeForm();
                //Enviar pra bases de dados


                if ($this->updateDB()) {

                    $this->view = 'success.php';
                } else {
                    $this->view = 'db_error.php';
                }

            } else {
                echo '<h1>Por favor, corrija os erros do formulário</h1>';
                $this->view = 'form.php';
                return false;
            }
        } else {
            $this->view = 'form.php';
            return false;
        }
    }

    private function updateDB()
    {
        return $this->create();

    }
}