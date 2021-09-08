<?php
include 'app/Model/DBConnect.php';

class Login extends DBConnect
{
    private const TABLE_NAME = 'users';
    public $view;
    public $dados;
    public $nome_pessoa;


    //Propriedades que serão usados na maioria dos Controllers vinda do formulário

    protected $form_senha;
    protected $form_usuario;


    /**
     * Função para ler somente o registro do cliente correspondente ao usuario que será recebido do URL
     * @param $id
     * @return mixed
     */
    protected function readOneUser($user)
    {
        $sql = "SELECT * FROM " . self::TABLE_NAME . " WHERE usuario LIKE :usuario";
        $declaracao = $this->db->prepare($sql);
        $declaracao->bindParam(':usuario', $user, PDO::PARAM_STR);
        $declaracao->execute();
        return $declaracao->fetchAll(PDO::FETCH_ASSOC);

    }

    /**
     * @return bool
     */
    protected function estou_autorizado($user)
    {


        $this->dados = $this->readOneUser($user);

        if ($this->dados) {
            $this->atribuirDadosDeDB($this->dados[0]);
            $this->nome_pessoa = $this->db_nome;
            return $this->testando_senha($this->form_senha);
        } else {
            echo "<h1>Há um problema de conexão, por favor tente mais tarde</h1>";
            return false;
        }

    }



    //Métodos de validação


    /**
     * Função pra validar todos os campos do formulário
     * @return bool
     */

    protected function validarCampos()
    {
        $form_valido = true;

        foreach ($_POST as $key => $value) {

            if (!$this->campoVazio($key)) {
                $form_valido = false;
            }


        }


        return $form_valido;
    }


    /**
     * Testar as senha da db com a senha fornecida
     */

    private function testando_senha($senha_fornecida)
    {
        $senha_pra_testar = $this->encriptar_senha($this->db_token, $senha_fornecida);
        if ($senha_pra_testar === $this->db_senha) {
            return true;
        } else {
            return false;
        }

    }

}