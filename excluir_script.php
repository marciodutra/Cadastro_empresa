<?php include "validar.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exclusão de Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
          <div class="col">

          <?php

            include "conexao.php";
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            
            $sql = "DELETE from `pessoas`  WHERE cod_pessoa = $id";

            if(mysqli_query($conn, $sql)) {
                mensagem("$nome excluído com sucesso!", 'success');
            }else {
                mensagem("$nome não foi excluído", 'danger');

            }
          ?>

          <a href="pesquisa.php" class="btn btn-primary">Voltar</a>
          
          </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>