<?php


class DBConnect
{
    private const DB_NAME = 'carros';
    private const DB_user = 'root';
    private const DB_pass = '';
    private const HOST = 'localhost';
    private const DB_TIPO = 'mysql';
    protected $db;

    //Propriedades que serão usados na maioria dos Controllers vinda do formulário que quero que sejam protected
    protected $form_nome;
    protected $form_email;
    protected $form_senha;
    protected $form_usuario;


    //Propriedades criadas aqui que vão para a base de dados que quero que sejam protected
    protected $token;
    protected $created_at;
    protected $senha_encriptada;

    //Propriedades recebidas da base de dados que quero que sejam protected
    protected $db_token;
    protected $db_senha;
    protected $db_usuario;

    function __construct()
    {

        $caminho = DBConnect::DB_TIPO . ':host=' . DBConnect::HOST . ';dbname=' . DBConnect::DB_NAME;

        $this->db = new PDO($caminho, DBConnect::DB_user, DBConnect::DB_pass);
    }

    /**
     * Função para limpar input de html ou SQL malicioso
     */
//    protected function sanitize($string)
//    {
//
//
//        $string_limpo_1 = filter_var($string, FILTER_SANITIZE_STRING);
//        $string_limpo_2 = filter_var($string_limpo_1, FILTER_SANITIZE_STRING);
//        $string_limpo_3 = filter_var($string_limpo_2, FILTER_SANITIZE_STRING);
//        $string_limpo_4 = filter_var($string_limpo_3, FILTER_SANITIZE_STRING);
//        $string_limpo_final = filter_var($string_limpo_4, FILTER_SANITIZE_STRING);
//        return $string_limpo_final;
//    }
//A partir do PHP 8.1 o filter_var foi deprecado. O indicado é usar o htmlspecialchars
    protected function sanitize($string)
    {

        $string_limpo_1 = htmlspecialchars($string, ENT_SUBSTITUTE);
        $string_limpo_2 = htmlspecialchars($string_limpo_1, ENT_SUBSTITUTE);
        $string_limpo_3 = htmlspecialchars($string_limpo_2, ENT_SUBSTITUTE);
        $string_limpo_4 = htmlspecialchars($string_limpo_3, ENT_SUBSTITUTE);
        $string_limpo_final = htmlspecialchars($string_limpo_4, ENT_SUBSTITUTE);

        return $string_limpo_final;
    }

    //Métodos que vão lidar com a senha tanto para a classe Login, quanto para a classe Users

    /**
     *Essa função vai fazer parte da encriptação da senha, a parte que precisa ser reproduzida ao testar a senha fornecida com o token da db
     **/

    protected function encriptar_senha($token, $pass)
    {

        $hash_extra = $token + (60 * 60 * 10 * 5);//Isto aumenta o meu hash e dificulta descobrir ele pois este pedaço não é guardado na db mas no código
        $salty = dechex($hash_extra) . $pass;
        $senha_ecriptada = hash('sha1', $salty);
        return $senha_ecriptada;

    }

    /**
     *Essa função vai encriptar a sua senha com o mesmo
     **/
    protected function encriptar_senha_para_db()
    {
        //Vamos criar um hash
        date_default_timezone_set('US/Eastern'); //mudar o fuso dificulta a possibilidade de achar seu hash
        $this->token = time(); //Isto deve ser guardado no token que vai para a base de dados.

        //Agora eu rodo a criptografia com o token e a senha que eu peguei e guardei na db
        $this->senha_encriptada = $this->encriptar_senha($this->token, $this->form_senha);

        return $this->senha_encriptada;

    }


    //Métodos de validação
    protected function campoVazio($campo)
    {
        $valido = true;
        //Primeiro uso a função trim que vai tirar qualquer espaço em branco do começo e final de um string, para verificar se está vazio
        if (trim($_POST[$campo]) === '') {
            //Criando o erro para ser mostrado
            $var = "{$campo}_erro";
            $this->$var = '<br><span class="erro_form">O campo ' . $campo . ' é obrigatório</span>';
            $valido = false;
        }

        //Outra maneira de ver se está vazio
        if (!filter_input(INPUT_POST, $campo)) {
            $var = "{$campo}_erro";
            $this->$var = '<br><span class="erro_form">O campo ' . $campo . ' é obrigatório</span>';
            $valido = false;
        }
        return $valido;

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