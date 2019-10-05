// Buscar a informação e transferir para a modal
function visualizarArquivo(caminho, nome) {

    fetch(caminho)
      .then(function(response) {
          if (response.ok)
              return response.text();

      }).then(function(conteudo) {
          var modalTitlel = document.getElementById("nomeArquivo"); 
          var modalContent = document.getElementById("conteudoArquivo");

          modalTitlel.innerHTML = nome;
          modalContent.innerHTML = conteudo;
      }).catch(function(error) {
          errorMessage;
      });
}

function deletarArquivo(caminho) {
  if (confirm("Tem certeza que deseja excluir este arquivo permanentemente?")) {
      var request = $.ajax({url: "../classes/Cliente.php", method: "POST", data: {arquivoDeletado: caminho}});    
      request.done(function() {alert("Arquivo excluido com sucesso!")});
      window.location.reload(1);
  } else 
      alert("Cancelado!");
}


function deletarPasta(directoryPath) {
  if (confirm("Tem certeza que deseja excluir a pasta permanentemente?")) {
      var request = $.ajax({url: "../classes/Cliente.php", method: "POST", data: {pastaDeletada: directoryPath}});
      request.done(function() {alert("Pasta excluida com sucesso!");});
      window.location.reload(1);
  } else 
      alert("Cancelado!");
}

function errorMessage() {
  //error message
  $errorMsg = 'Deu Ruim';
  
  return $errorMsg;
}

