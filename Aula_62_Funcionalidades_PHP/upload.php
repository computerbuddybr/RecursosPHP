<?php
include '../todos/functions.php';
include '../todos/header.php';

display_info($_FILES, 'O Array de PHP Files');
$tipos_permitidos = ["image/png", "image/jpg", "image/bmp"];
$arquivo_valido = true;
$tamanho_maximo = 10485760; //10MB em bytes
$diretorio = __DIR__;
$pasta_upload = "$diretorio\uploads\\";


if (isset($_FILES["arquivo"])) {
    if (isset($_FILES["arquivo"]["type"]) && isset($_FILES["arquivo"]["size"])) {

        if (!in_array($_FILES["arquivo"]["type"], $tipos_permitidos)) {
            $arquivo_valido = false;

        }
        if ($_FILES["arquivo"]["size"] > $tamanho_maximo) {
            $arquivo_valido = false;
        }

    }
    if ($arquivo_valido) {
        //$nome_arquivo = $_FILES["arquivo"]["name"];
        $ext = substr($_FILES["arquivo"]["name"], -4);
        $nome_arquivo = time() . $ext;
        //Criando o caminho completo do arquivo
        $caminho_completo = $pasta_upload . $nome_arquivo;
        $temporario = $_FILES["arquivo"]["tmp_name"];
        if (move_uploaded_file($temporario, $caminho_completo)) {
            echo 'Parabéns, você carregou seu arquivo!';
        } else {
            echo 'Oops, deu erro.';
        }
    } else {
        echo 'Oops, deu erro.';
    }
}

?>
    <form method="post" action="#" enctype="multipart/form-data">

        <label for="arquivo">Carregue o arquivo: </label>
        <input type="file" name="arquivo" id="arquivo">

        <input type="submit" value="Enviar" name="submit">

    </form>

    <div id="imagens">

        <?php
        $arquivos = scandir($pasta_upload);
        //display_info($arquivos,'Os arquivos');
        foreach ($arquivos as $arquivo) {
            if ($arquivo != '.' && $arquivo != '..') {
                echo '<a download href="uploads/' . $arquivo . '"><img class="img_uploads" src="uploads/' . $arquivo . '"></a>';
            }
        }

        ?>


    </div>


<?php
include '../todos/footer.php';
?>