<?php


class DBConnect
{
    private const DB_NAME = 'seguranca';
    private const DB_user = 'root';
    private const DB_pass = '';
    private const HOST = 'localhost';
    private const DB_TIPO = 'mysql';
    protected const TABLE_NAME = 'adriana_acessos';

    protected $db;

    public function __construct()
    {

        $caminho = DBConnect::DB_TIPO . ':host=' . DBConnect::HOST . ';dbname=' . DBConnect::DB_NAME;

        $this->db = new PDO($caminho, DBConnect::DB_user, DBConnect::DB_pass);
    }


}

class Acesso extends DBConnect
{


    public function __construct()
    {
        parent::__construct();
        $this->session_id_e_user_agent();
        if ($this->checarDB($this->nav_session_id)) {
            $valido = $this->avaliandoAcesso();
        } else {
            $this->inserirPrimeiroAcesso();
            echo '<br>Primeiro acesso<br>';
            $valido = true;
        }

        if ($valido) {
            echo '<br>Legal, este acesso é valido<br>';
        } else {
            echo '<br>Oops, esta sessão foi roubada.<br>';
        }


    }

    /**
     * Função que retorna verdadeiro se o acesso é ou o primeiro ou um retorno válido se não retorna falso
     * @param $session_id
     * @param $user_agent
     * @return bool
     */
    private function avaliandoAcesso()
    {


        if ($this->user_agent === $this->nav_user_agent) {
            $this->updateDB();
            echo '<br>Retorno<br>';
            return true;
        } else {
            echo '<br>Acesso inválido<br>';
            //Vou destruir a sessão
            session_destroy();
            return false;
        }

    }

    /**
     * Checar para ver se o registro com o session_id existe
     * @param $session_id
     * @return array
     */
    private function checarDB()
    {
        //echo "<br>Session ID veio: $this->nav_session_id";
        $sql = "SELECT * FROM " . self::TABLE_NAME;
        // echo "<br>$sql";
        $declaracao = $this->db->prepare($sql);
        $declaracao->execute();
        $dados = $declaracao->fetchAll();
//        echo '<br>Os Dados<br><pre> ';
//        var_dump($dados);
//        echo '</pre>';
        foreach ($dados as $dado) {
            if ($this->nav_session_id == $dado['session_id']) {
                $this->session_id = $dado['session_id'];
                $this->contador = $dado['contador'];
                $this->user_agent = $dado['user_agent'];
                return true;
            }
        }
        return false;
    }

    /**
     * Se for o primeiro acesso criar o registro com o id de sessão, o contador em 1 e o User Agent
     * @return bool
     */
    private function inserirPrimeiroAcesso()
    {
        $contador = 1;

        $sql = "INSERT INTO " . parent::TABLE_NAME . " (session_id, cpf, contador, user_agent) VALUES (:session_id, :contador, :user_agent)";

        //    $sql = "INSERT INTO " . parent::TABLE_NAME . " (session_id, cpf, contador, user_agent) VALUES (" . $this->nav_session_id .", $contador, ".$this->nav_user_agent. ")";

        //Preparando a declaração
        echo '<br>Declaração insert: ' . $sql;
        $declaracao = $this->db->prepare($sql);

        //Ligando os valores
        $declaracao->bindValue(':session_id', $this->nav_session_id, PDO::PARAM_STR);
        $declaracao->bindValue(':contador', $contador, PDO::PARAM_INT);
        $declaracao->bindValue(':user_agent', $this->nav_user_agent, PDO::PARAM_STR);


        //Executando
        $teste = $declaracao->execute();
        display_info($teste, 'Execute');
        //Checando se deu certo
        if ($declaracao->rowCount() > 0) {
            echo '<br> Funcionou o insert';
            return true;
        } else {
            echo '<br> Deu pau o insert';
            return false;
        }
    }

    /**
     * Se o acesso era valido, atualizar o contador na base de dados
     * @param $session_id
     * @param $contador
     * @return bool
     */
    private function updateDB()
    {
        $novo_contador = $this->contador + 1;
        $sql = "UPDATE " . parent::TABLE_NAME . " SET contador=:contador WHERE session_id LIKE :session_id";
        echo '<br>Declaração update: ' . $sql;
        //Preparando a declaração
        $declaracao = $this->db->prepare($sql);

        //Ligando os valores
        $declaracao->bindValue(':session_id', $this->nav_session_id, PDO::PARAM_STR);
        $declaracao->bindValue(':contador', $novo_contador, PDO::PARAM_INT);

        //Executando
        $declaracao->execute();
        //Checando se deu certo
        if ($declaracao->rowCount() > 0) {
            echo '<br> Funcionou o update';
            return true;
        } else {
            echo '<br> Funcionou o update';
            return false;
        }
    }

    /**
     * Fazer echo do contador da Base de Dados
     */
    public function mostrar_contador()
    {
        if (isset($this->contador)) {
            echo '<br>O contador na base de dados está em: ' . $this->contador . '<br>';
            echo '<br>O user agent na base de dados é: ' . $this->user_agent . '<br>';
            echo '<br>O session id na base de dados é: ' . $this->session_id . '<br>';

        }
    }

    /**
     * Obter o session id e o user agent
     */
    private function session_id_e_user_agent()
    {
        $this->nav_session_id = session_id();
        $this->nav_user_agent = $_SERVER['HTTP_USER_AGENT'];
        echo "<br>O meu Session ID do navegador é $this->nav_session_id e o meu User Agent é $this->nav_user_agent<br>";
    }
}

