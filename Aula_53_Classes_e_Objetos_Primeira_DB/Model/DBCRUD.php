<?php
include 'Model/DBConnect.php';

/**
 * CRUD: Create (Criar), Read (Ler), Update (Atualizar), Delete (Apagar)
 * Class DBCRUD
 */
class DBCRUD extends DBConnect
{
    public function create()
    {


    }

    /**
     * Método que lê dados da minha base de dados Carros.
     * @return array|false
     */
    public function read()
    {
        $sql = 'SELECT * FROM carros';
        //Exemplo de conexão direta sem usar declarações preparadas:
        //$this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        $declaracao = $this->db->prepare($sql);
        if ($declaracao->execute()) {
            /**
             * PDO::FETCH_ASSOC (retorna um array associativo com os nomes das colunas)
             * PDO::FETCH_NUM (retorna um array indexado com os números das colunas)
             * PDO::FETCH_CLASS (simula uma classe onde as colunas passam a ser propriedades)
             * PDO::FETCH_BOTH (retorna tanto nomes, quanto números para as colunas)
             */
            $resultado = $declaracao->fetchAll(PDO::FETCH_ASSOC);

        } else {
            $resultado = false;
            echo "<br>Oopsie, deu erro : " . $declaracao->errorCode() . "<br>";
        }


        display_info($resultado, 'O que vou receber da Base de dados');

        //Fechando a conexão
//        $this->db = null;
//        $declaracao = null;
        return $resultado;

    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public function closeConnection()
    {
        unset($this->db);
    }


}