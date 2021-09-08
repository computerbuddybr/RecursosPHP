<?php
include 'app/Model/Clientes.php';

class UpdateController extends Clientes
{
    public function __construct()
    {
        parent::__construct();
        if (isset($_GET['id'])) {
            $this->id = $this->sanitize(intval($_GET['id']));
            if ($this->id === 0) {
                $this->view = 'erro_de_url_id.php';
                return;
            } else {
                $info = $this->readOne($this->id);
                if (count($info) === 0) {
                    $this->view = 'erro_de_url_id.php';
                    return;
                } else {

                    $this->atribuirDadosDeDB($info[0]);
                    $this->processForm();
                }


            }
        } else {
            $this->view = 'erro_de_url_id.php';
            return;
        }

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
                $this->view = 'form_update.php';;
                return false;
            }
        } else {
            $this->view = 'form_update.php';
            return false;
        }
    }


    private function updateDB()
    {
        return $this->update($this->id);

    }

}