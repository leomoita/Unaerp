<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>

<body>
    <div class="container mt-5 shadow-lg p-3 mb-5 bg-white rounded">
        <?php
          include_once('../classes/Tela.php');
          $Tela = new Tela();
          if (isset($_GET['caminho'])) {
              echo ($Tela->telaEdicao($_GET['caminho']));
          } else {
              echo ($Tela->telaInclusao());
          }
        ?>
    </div>
</body>

</html>
