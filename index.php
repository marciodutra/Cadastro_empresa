<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="restrito/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </head>
  <body>

      <div class="container">
        <div class="row">
          <div class="col-3"></div>
          <div class="col-6 bg-info">
            <div class="jumbotron">
                <h1 class="display-4">Cadastro web</h1>
                <form action="index.php" method="POST">

                  <div class="form group">
                    <label for="exampleInputEmail1" class="form-label">Login</label>
                    <input type="text" class="form-control" name="usuario">
                    <div name="usuario" class="form-text">Entre com seus dados de acesso.</div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Senha</label>
                    <input type="password" class="form-control" name="senha">
                  </div>
                  <button type="submit" class="btn btn-primary">Acessar</button>

                </form>
                <?php
                    if(isset($_POST['usuario'])) {
                      $login = $_POST['usuario'];
                      $senha = md5($_POST['senha']);

                      include "conexao.php";
                      $sql = "SELECT * from `usuarios` WHERE usuario = '$login' AND senha = '$senha'";

                      if ($result = mysqli_query($conn, $sql)) {
                         $num_registros = mysqli_num_rows($result);

                         if($num_registros == 1) {
                          $linha = mysqli_fetch_assoc($result);
  
                          if(($login == $linha['usuario']) and ($senha ==$linha['senha'])) {
                            session_start();
                            $_SESSION['usuario'] = "marcio";
                            header("location: home.php");
                          } else {
                            echo "Usuário ou senha inválidos";
                          }
                          }else {
                            echo "Usuário  senha não encontrados ou inválidos";
                          }
                        }  else { echo "Nenhum resultado foi encontrado ";}
                      }
                      
                           
                 ?>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>