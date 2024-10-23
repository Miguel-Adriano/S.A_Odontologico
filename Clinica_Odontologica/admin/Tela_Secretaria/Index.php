<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../Styles/StyleLogin.css">
    <!-- <img src="...img/fundo_login.jpg" />  -->
    <style type="text/css">
        
        body {
            font-family: Arial;
            height: 100vh; /* Altura total da tela */
            margin: 0;
            display: flex;
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center; /* Centraliza verticalmente */
            background-color: grey;
        }

        label {
            display: inline-block;
            width: 60px;
        }
    </style>
</head>
<body>
    <div>
         <!-- <h1 align="center">LOGIN</h1> 
         <hr>
        <br>  -->
        <form class="form" action="VerificaDados.php" method="POST">
            <p class="form-title"></p>
            <p class="form-title">Entre na sua conta</p>
        <div class="input-container">
          <input type="text" name="cpf" id="cpf" placeholder="CPF" required>
          <span>
          </span>
      </div>
      <section>
      <div class="input-container" >
          <input type="password" name="senha" id="senha" placeholder="Senha" required>
          <div id="icon"></div>
        </div>
        </section>
         <button type="submit" class="submit">
        Entrar
      </button>


   </form>
    </div>
</body>
</html>



