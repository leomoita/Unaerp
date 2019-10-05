<?php
//Gerar as Telas
class Tela{

    private $Telas;

    //Tela de inclusão
    public function telaInclusao(){

        $this->Telas = '        <body>
        <div class="container">
            <h5>Cadastro de Arquivo</h5>
            <div class="row">
                <div class="col s12 z-depth-6 card-panel">
                    <form action="../classes/Cliente.php" method="POST">


                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="mdi-social-person-outline prefix"></i>
                                <input class="validate" name="codigo" type="number" required>                                           
                                <label for="codigo"
                                    data-success="Preenchido" class="center-align">Codigo</label>
                            </div>
                        </div>

                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="mdi-social-person-outline prefix"></i>
                                <input class="validate" name="nome" type="text" required>                                           
                                <label for="nome"
                                    data-success="Preenchido" class="center-align">Nome do Arquivo</label>
                            </div>
                         </div>
        
        
                         <div class="row margin">
                            <div class="input-field col s12">
                                <i class="mdi-social-person-outline prefix"></i>
                                <textarea class="mdl-textfield__input validate" name="conteudo" rows="10" required></textarea>                                      
                                <label for="conteudo"
                                    data-success="Preenchido" class="center-align">Conteúdo do Arquivo</label>
                            </div>
                        </div>

                        <div class="row">
                            <div style="float: right" class="input-field col">
                                <input type="submit" class="btn waves-effect waves-light col s12" name="btnPost" value="Confirmar" />
                            </div> 

                            <div style="float: right" class="input-field col">
                                <a type="button" class="btn waves-effect waves-light col s12" href="../index.php">Cancelar</a>
                            </div>
                        </div>
        
                    </form>
        
                </div>
            </div>
        </div>
    </body>';

        return $this->Telas;

    }

    //Tela de Edição
    public function telaEdicao($pasta){

        $codigo = str_replace('../clientes/', '', dirname($pasta));
        $nome = str_replace('.txt', '', basename($pasta));
        $conteudo = file_get_contents($pasta, FILE_TEXT);

        $this->Telas = '        <body>
        <div class="container">
            <h5>Edição de Arquivo</h5>
            <div class="row">
                <div class="col s12 z-depth-6 card-panel">
                    <form action="../classes/Cliente.php" method="POST">


                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="mdi-social-person-outline prefix"></i>
                                <input class="validate" name="codigo" type="number" readonly="true" value="' . $codigo . '" required>                                           
                                <label for="codigo"
                                    data-success="Preenchido" class="center-align">Codigo</label>
                            </div>
                        </div>

                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="mdi-social-person-outline prefix"></i>
                                <input class="validate" name="nome" type="text" readonly="true" value="' . $nome . '" required>                                           
                                <label for="nome"
                                    data-success="Preenchido" class="center-align">Nome do Arquivo</label>
                            </div>
                         </div>
        
        
                         <div class="row margin">
                            <div class="input-field col s12">
                                <i class="mdi-social-person-outline prefix"></i>
                                <textarea class="mdl-textfield__input validate" name="conteudo" rows="10" required>' . $conteudo . '</textarea>                                      
                                <label for="conteudo"
                                    data-success="Preenchido" class="center-align">Conteúdo do Arquivo</label>
                            </div>
                        </div>

                        <div class="row">
                            <div style="float: right" class="input-field col">
                                <input type="submit" class="btn waves-effect waves-light col s12" name="btnPost" value="Confirmar" />
                            </div> 

                            <div style="float: right" class="input-field col">
                                <a type="button" class="btn waves-effect waves-light col s12" href="../templates/staticGrid.php">Cancelar</a>
                            </div>
                        </div>
        
                    </form>
        
                </div>
            </div>
        </div>
    </body>';

        return $this->Telas;
    }
}

?>
