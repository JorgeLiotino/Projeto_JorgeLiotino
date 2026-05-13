<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title ?></title>
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
  <div class="container">

    <h1>Bem vindo</h1>

    <p>
      Entre no sistema para acessar as funcionalidades.
    </p>

      <div class="buttons">
        <a href="login" class="btn login" >Login</a>

        <a href="cadastro" class="btn cadastro">Cadastro</a>
      </div>
  </div>

  <?php
  
  for ($i = 0; $i <3; $i++){

  echo $arr[$i]."<br>"; 

  }

  //echo "Nome: " . $pessoa->getNome();
  //echo "<br>Idade: " . $pessoa->getIdade();

  ?>

</body>
</html>