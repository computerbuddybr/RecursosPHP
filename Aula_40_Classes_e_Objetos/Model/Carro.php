<?php

/**
 * Created by PhpStorm.
 * User: AdrianaL
 * Date: 30/05/2020
 * Time: 12:30
 */
class Carro
{
    //poderão ser acessadas fora da Classe
    public $anoDeFabricacao;
    public $modelo;
    public $cor;
    public $marca;
    //poderão ser acessadas só pela própria Classe
    private $nomeDoDono;


    //poderão ser acessadas somente pela Classe, seus pais e filhos
    protected $valorDoCarro;


    //Método contrutor que será chamado quando a classe for instênciando. Nele colocamos o comportamento que queremos que seja executado automáticamente em todo objeto

    /**
     * Carro constructor.
     * @param $ano
     * @param $modelo
     * @param $cor
     * @param $dono
     * @param $valor
     */
    function __construct($ano, $modelo, $marca, $cor, $dono, $valor)
    {
        $this->anoDeFabricacao = $ano;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->valorDoCarro = $valor;
        $this->nomeDoDono = $dono;
        $this->marca = $marca;


    }

    function teste()
    {
        echo '<br>';
        echo $this->nomeDoDono;
        echo '<br>';
        echo $this->valorDoCarro;
        echo '<br>';
        echo $this->cor;
    }

    /**
     * Destrutor que será chamado quando o objeto for destruido por um unset por exemplo.
     */
//    function __destruct()
//    {
//        echo 'Fui<br>';
//    }

    public function criandoNovasPropriedades()
    {
        //A diferenção entre uma propriedade que é criada em um método e uma propriedade que já é definida a nível de classe é que sempre que a classe for instanciada em um objeto, as propriedades definidas a nível de classe vão ser criadas, existirão mesmo que o estejam vazias, já as criadas dentro de métodos só serão criadas quando o métdodo for chamado.
        $this->fuiCriadoAquiDentro = 'Para mostrar que só é criado quando método for chamado';
    }


    /**
     * Fazer echo de propriedades
     * @param $propriedade
     */
    public function mostrarInformação($propriedade)
    {
        echo $this->$propriedade;

    }

    /**
     * Static
     */
    private static $propriedadeStaticPrivada = "Sou só da classe";

    private static function souPrivada()
    {
        echo "Sou um método de classe privado";
    }

    public static $propriedadeStatic = 'Propriedade static';

    public static function souStatic()
    {
        echo 'Sou uma função Static<br>';
        //Acessando um a propriedade static de dentro da Classe. Isto é valido para métodos static e de instância
        echo 'De dentro da classe: ' . self::$propriedadeStatic . '<br>';

        echo self::$propriedadeStatic;
        echo '<br>';
        self::souPrivada();

        //Isto não vai funcionar pois o $this sempre se refere a uma instância e uma função static não usa uma instância, o que significa que o $this não vai ter para quem apontar.
        //echo 'De dentro de uma função static com o $this'. $this->ano . '<br>';
    }

    //Testando uma mistura
    public function testandoMistura()
    {
        self::souPrivada();
    }

    static function mistura2($objeto)
    {
        $objeto->teste();
    }
}





