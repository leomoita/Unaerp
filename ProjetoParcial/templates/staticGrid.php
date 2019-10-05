<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="../scripts/diretivaGrid.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

</head>
  <body>

    <div class="container">
        <h1 class="mb-3">Busca de Arquivos</h1>
        <div class="row mb-5 ml-5 mr-5">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome Arquivo</th>
                    <th colspan="4" scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include_once('../classes/Grid.php');
                        $Grid = new Grid('../clientes');
                        echo $Grid->grid();
                    ?>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="input-field col">
                <a type="button" style="float: right" class="btn waves-effect waves-light" href="../index.php">Voltar</a>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalFile" tabindex="-1" role="dialog" aria-labelledby="nomeArquivo" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="nomeArquivo"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <p id="conteudoArquivo"></p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
        </div>
    </div>
  </body>
</html>
