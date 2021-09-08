<?php
require 'todos/header_inicial.php';

?>

<h1 class="page_title">Teste rápido</h1>

<?php
class Prop{
    public function __construct(private $nome){
        $this->nome = $nome;
    }



    public function ola(){
        echo "Olá $this->nome";
    }
}

$propriedade = new Prop('Adriana');

echo $propriedade->nome;







?>

<?php
require 'todos/footer.php';
?>
