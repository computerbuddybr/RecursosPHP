<?php
include_once 'app/Model/DBConnect.php';


class Clientes extends DBConnect
{
    private const TABLE_NAME = 'clientes';
    public $view;
    public $dados;


    //Propriedades que serão usados na maioria dos Controllers vinda do formulário
    protected $form_nome;
    protected $form_cpf;
    protected $form_email;
    protected $form_endereco;
    protected $form_usuario;


    /**
     * Função para ler todos os registros da tabela
     * @return mixed
     */
    protected function read()
    {
        $sql = "SELECT * FROM " . self::TABLE_NAME;
        $declaracao = $this->db->prepare($sql);
        $declaracao->execute();
        return $declaracao->fetchAll(PDO::FETCH_ASSOC);

    }

    /**
     * Função para ler somente o registro do cliente correspondente ao id que será recebido do URL
     * @param $id
     * @return mixed
     */
    protected function readOne($id)
    {
        $sql = "SELECT * FROM " . self::TABLE_NAME . " WHERE id LIKE :id";
        $declaracao = $this->db->prepare($sql);
        $declaracao->bindParam(':id', $id, PDO::PARAM_INT);
        $declaracao->execute();
        return $declaracao->fetchAll(PDO::FETCH_ASSOC);

    }

    protected function create()
    {
        $created_at = (string)time();
        $sql = "INSERT INTO " . self::TABLE_NAME . " (nome, cpf, email, endereco, usuario, created_at, updated_at) VALUES (:nome, :cpf, :email, :endereco, :usuario, :created_at, :updated_at)";
        //Preparando a declaração
        $declaracao = $this->db->prepare($sql);

        //Ligando os valores
        $declaracao->bindValue(':nome', $this->form_nome, PDO::PARAM_STR);
        $declaracao->bindValue(':cpf', $this->form_cpf, PDO::PARAM_STR);
        $declaracao->bindValue(':email', $this->form_email, PDO::PARAM_STR);
        $declaracao->bindValue(':endereco', $this->form_endereco, PDO::PARAM_STR);
        $declaracao->bindValue(':usuario', $this->form_usuario, PDO::PARAM_STR);
        $declaracao->bindValue(':created_at', $created_at, PDO::PARAM_STR);
        $declaracao->bindValue(':updated_at', $created_at, PDO::PARAM_STR);

        //Executando
        $declaracao->execute();
        //Checando se deu certo
        if ($declaracao->rowCount() > 0) {

            return true;
        } else {

            return false;
        }


    }

    protected function update($id)
    {
        $updated_at = time();
        $sql = "UPDATE " . self::TABLE_NAME . " SET nome=:nome, cpf=:cpf, email=:email, endereco=:endereco, updated_at=:updated_at WHERE id LIKE :id";
        //Preparando a declaração
        $declaracao = $this->db->prepare($sql);

        //Ligando os valores
        $declaracao->bindValue(':nome', $this->form_nome, PDO::PARAM_STR);
        $declaracao->bindValue(':cpf', $this->form_cpf, PDO::PARAM_STR);
        $declaracao->bindValue(':email', $this->form_email, PDO::PARAM_STR);
        $declaracao->bindValue(':endereco', $this->form_endereco, PDO::PARAM_STR);
        $declaracao->bindValue(':updated_at', $updated_at, PDO::PARAM_STR);
        $declaracao->bindValue(':id', $id, PDO::PARAM_INT);

        //Executando
        $declaracao->execute();
        //Checando se deu certo
        if ($declaracao->rowCount() > 0) {
            return true;
        } else {
            return false;
        }

    }

    protected function delete($id)
    {
        $sql = "DELETE FROM " . self::TABLE_NAME . " WHERE id LIKE :id";
        $declaracao = $this->db->prepare($sql);
        $declaracao->bindValue(':id', $id, PDO::PARAM_INT);

        //Executando
        $declaracao->execute();
        //Checando se deu certo
        if ($declaracao->rowCount() > 0) {
            return true;
        } else {
            return false;
        }

    }

    /**
     * Função para dar echo de uma propriedade privada
     * @param $prop
     */
    public function display_prop($prop)
    {
        echo $this->$prop;
    }


    //Validação de CPF - Somente o cliente precisa dessa função, os administradores não tem campo CPF
    private function validarCPF($cpf_fornecido)
    {
//Garantindo que estou trabalhando com um string
//var_dump($cpf_fornecido);
        $cpf_fornecido = (string)$cpf_fornecido;
//var_dump($cpf_fornecido);

//Verificando se o cpf foi fornecido e se são 11 dígitos de 0-9.
        $regEx = '/^[0-9]+$/'; //Expressão regular para verificar se são só números
        if (strlen($cpf_fornecido) !== 11 || !preg_match($regEx, $cpf_fornecido)) {
            $this->cpf_invalido = '<br><span class="erro_form">Este CPF é inválido</span>';
            return false;
        }


//Fornecendo peso de 2 a 10 para meus dígitos e somando
        $soma1 = 0;
        for ($i = 0; $i < 9; $i++) {
            $soma1 += ($cpf_fornecido[$i] * (10 - $i));

        }

        $restanteSomaDiv = $soma1 % 11;
        if ($restanteSomaDiv < 2) {
            $penultDig = 0;
        } else {
            $penultDig = 11 - $restanteSomaDiv;
        }

        $soma2 = 0;
        for ($i = 0; $i < 9; $i++) {
            $soma2 += ($cpf_fornecido[$i] * (11 - $i));

        }

//Repetindo o processo
        $soma2 += $penultDig * 2;
        $restanteSomaDiv2 = $soma2 % 11;
        if ($restanteSomaDiv2 < 2) {
            $ultDig = 0;
        } else {
            $ultDig = 11 - $restanteSomaDiv2;
        }

//Verificando se os dígitos calculados são iguais aos fornecidos e retornando verdadeiro ou falso
        if ($penultDig == $cpf_fornecido[9] && $ultDig == $cpf_fornecido[10]) {


            return true;
        } else {
            $this->cpf_invalido = '<br><span class="erro_form">Este CPF é invalido</span>';
            return false;
        }
    }

    //Função pra validar todos os campos do formulário

    protected function validarCampos()
    {
        $form_valido = true;

        foreach ($_POST as $key => $value) {

            if (!$this->campoVazio($key)) {
                $form_valido = false;
            }


        }

        if (!$this->validarCPF($_POST['cpf'])) {
            $form_valido = false;
        }


        //Validando o email. Pode ser usado apenas antes do PHP 8.1
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $form_valido = false;
        }
        return $form_valido;
    }

    /**
     * Atribuir os dados enviados do formulário às minhas propriedades já limpando
     */

    protected function atribuirDadosDeForm()
    {
//        $this->form_nome = sanitize($_POST['nome']);
//        $this->form_cpf = sanitize($_POST['cpf']);
//        $this->form_email = sanitize($_POST['email']);
//        $this->form_endereco = sanitize($_POST['endereco']);
        unset($_POST['submit']);
        foreach ($_POST as $key => $value) {
            $nome_var = 'form_' . $key;
            $this->$nome_var = $this->sanitize($value);
        }

    }

    /**
     * Atibuir os dados retornados aos formulários às variáveis
     * @param $dados
     */
    protected function atribuirDadosDeDB($dados)
    {

        foreach ($dados as $key => $value) {
            $nome_var = 'db_' . $key;
            $this->$nome_var = $this->sanitize($value);
        }

    }


}