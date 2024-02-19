<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

      <?php
            include "conexao.php";
            $id = $GET['id'] ?? '';
            $sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";

            $dados = mysqli_query($conn, $sql);

            $linha = mysqli_fetch_assoc($dados);
      ?>
    <div class="container">
        <div class="row">
          <div class="col">
          <h1>Alteração de cadastro</h1>
          <form action="cadastro_script.php" method="POST">
          <div class="mb-3">
                <label for="nome">Nome completo</label>
                <input type="text" class="form-control" name="nome" required value=" <?php echo $linha['nome'];?>">
          </div>
          <div class="mb-3">
                <label for="endeereco">Endereço</label>
                <input type="text" class="form-control" name="endereco" value=" <?php echo $linha['endereco'];?>">
          </div>
          <div class="mb-3">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" name="telefone" value=" <?php echo $linha['telefone'];?>>
          </div>
          <div class="mb-3>
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value=" <?php echo $linha['email'];?>">
          </div>
          <div class="mb-3">
                <label for="data_nascimento">Data de nascimento</label>
                <input type="date" class="form-control" name="data_nascimento" value=" <?php echo $linha['data_nascimento'];?>">
          </div>
          <div class="mb-3">
                <input type="submit" class="btn btn-success" value="Salvar Alterações">
          </div>
          </form>
          <a href="index.php" class="btn btn-info">Voltar para o início</a>
          </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>