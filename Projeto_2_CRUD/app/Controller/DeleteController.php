<?php
include 'app/Model/Clientes.php';

class DeleteController extends Clientes
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


            if ($this->updateDB()) {

                $this->view = 'success.php';
            } else {
                $this->view = 'db_error.php';
            }


        } else {
            $this->view = 'delete.php';
            return false;
        }
    }


    private function updateDB()
    {
        return $this->delete($this->id);

    }

}