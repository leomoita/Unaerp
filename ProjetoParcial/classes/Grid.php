<?php

// Essa classe irá criar um grid com as informações
class Grid{

    private $grid;

    public function __construct($itensGrid){
        $this->grid = $itensGrid;
    }
    private function isEmpty($pasta){
        if (!is_readable($pasta)) 
            return NULL;      
        return (count(scandir($pasta)) == 2);
    }

    //Busca da Grid atraves das pastas
    public function grid(){

        $table = "";
        $row = "";
        $numItens = 0;

        if(is_dir($this->grid)){
            $codigoPasta = scandir($this->grid);

            foreach($codigoPasta as $codigo){
                if($codigo == '.' || $codigo == '..') continue;

                $item = $this->grid.'/'.$codigo;

                if(is_dir($item)){
                    $arquivos = scandir($item);

                    if($this->isEmpty($item)){
                        
                        $row .= '<td>Vazio</td>';
                        $row .= '<td>'.  '<button class="btn btn-danger btn-sm" onclick=deletarPasta("' . $item . '")><i class="fa fa-trash ata-toggle="tooltip" title="Excluir pasta""></i> Excluir Pasta</button></td>';
                    }

                    foreach ($arquivos as $arquivo) {
    
                        if($arquivo == '.' || $arquivo == '..') continue;

                        $caminho = $this->grid.'/'.$codigo.'/'.$arquivo;
    
                        if($numItens != 0){
                            $row .= '<tr>';
                        }

                        $row .= '<td>' . $arquivo . '</td>';
                        $row .= '<td>
                            <a href="" data-toggle="modal" data-target="#modalFile" onclick=visualizarArquivo("' . $caminho . '","' . str_replace('.txt', '', $arquivo). '")><i class="fa fa-eye" data-toggle="tooltip" title="Visualização"></i></a>
                            <a href="formulario.php?caminho=' . $caminho . '"><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Editar"></i></a>
                            <a download href="' . $caminho . '"><i class="fa fa-download" data-toggle="tooltip" title="Download"></i></a>
                            <a href="" onclick=deletarArquivo("' . $caminho . '")><i class="fa fa-trash-o" data-toggle="tooltip" title="Excluir"></i></a></td>';
    
                        if($numItens != 0){
                            $row .= '</tr>';
                        }
                        $numItens++;
                    }

                }
                
                if($numItens == 1 || $numItens == 0){
                    $table .= '<tr><th scope="row">' . $codigo . '</th>' . $row . '</tr>';
                }else{
                    $table .= '<tr><th rowspan="' . $numItens .'">' . $codigo . '</th>' . $row . '</tr>';
                }

                $row = "";
            }

            return $table;
        }    
    }
}

?>
