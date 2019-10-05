<?php

//Classe de cliente que tem as propriedades para criar e deletar pastas
class Cliente {

    private $grid;
    private $diretorio;
    private $nome;
    private $conteudoArquivo;
    private $caminho;

    public function __construct($codigo, $nome, $conteudoArquivo){
        $this->grid = '../clientes';
        $this->diretorio = '../clientes/' . $codigo;
        $this->nome = $nome;
        $this->conteudoArquivo = $conteudoArquivo;
        $this->caminho =  $this->diretorio . '/' . $nome . '.txt';
    }

    // Ccadastrar pastas para o cliente
    public function createFile(){
       
        if(!is_dir($this->grid)) 
            mkdir($this->grid,0777);
            if (is_dir($this->diretorio)) 
                file_put_contents($this->caminho, $this->conteudoArquivo);        
                else if (mkdir($this->diretorio,0777))
                    file_put_contents($this->caminho, $this->conteudoArquivo);
    }

    public static function deletarArquivo($arquivo){
        return unlink($arquivo);
    }

    public static function deletarPasta($pasta){
        return rmdir($pasta);
    }
}

// Inclusão
try {
    if (isset($_POST['codigo']) && !empty($_POST['codigo'])) {

        $diretorio = '../clientes/' . $_POST['codigo'];
        $nome = $_POST['nome'];
        $conteudoArquivo = $_POST['conteudo'];

        $Cliente = new Cliente($diretorio, $nome, $conteudoArquivo);
        $Cliente->createFile();
        
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Arquivo cadastrado/alterado com sucesso!')
        window.location.href='../index.php';
        </SCRIPT>");
    }
} catch (Exception $ex) {
    echo 'Erro: ' . $ex;
}

// passando os parametros para deleção do arquivo
try {
    if (isset($_POST['arquivoDeletado']) && !empty($_POST['arquivoDeletado'])) {
        $pathDel = $_POST['arquivoDeletado'];
        Cliente::deletarArquivo($pathDel);
    }
} catch (Exception $ex) {
    echo 'Erro: ' . $ex;
}

// passando os parametros para deleção da pasta
try {
    if (isset($_POST['pastaDeletada']) && !empty($_POST['pastaDeletada'])) {
        $pathDel = $_POST['pastaDeletada'];
        Cliente::deletarPasta($pathDel);
    }
} catch (Exception $ex) {
    echo 'Erro: ' . $ex;
}
?>