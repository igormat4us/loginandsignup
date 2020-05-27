<?php
session_start();
?>
 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Pheels Solutions</title>
</head>
<body>
    <br>
 <h1>  Login para Lista de Tarefas:</h1>
 <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>

  <form action="validalogin.php" method="POST">
 <div class="form-group">

    <label for="exampleInputEmail1">Email do Usuário:</label>
    <input type="text" class="form-control"name="login" id="login" aria-describedby="emailHelp" placeholder="Digite seu email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha do Usuário:</label>
    <input type="password" class="form-control" id="senha" name="senha"placeholder="Digite sua senha">
  </div>
  <button type="submit"value="entrar" id="entrar" name="entrar" class="btn btn-primary">LOGIN</button>
  <a href="cadastro.php">Cadastrar
</form>
</body>
</html>