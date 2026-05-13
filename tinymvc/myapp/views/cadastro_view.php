<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="container">

    <h1>Cadastro</h1>

    <form method="POST" action="cadastro/salvar">

      <input type="text" name="nome" placeholder="Nome">

      <input type="email" name="email" placeholder="Email">

      <input type="password" name="senha" placeholder="Senha">

      <button type="submit">
        Cadastrar
      </button>

    </form>

  </div>
</body>
</html>