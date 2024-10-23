<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="../Styles/StyleIndex.css">
    <link rel="stylesheet" href="../Styles/StyleCadastro.css">
    <style>
        img.logo {
            width: 350px; /* Defina o tamanho desejado para a logo */
            height: auto;  /* Mantém a proporção da imagem */
            position: absolute;
            top: 10px;  /* Ajusta a distância do topo */
            left: 10px; /* Ajusta a distância da esquerda */
        }
        /* Estilo do corpo */
body {
    margin: 0;
    font-family: Arial, sans-serif; 
    /* background-color: grey; */
}
hr {
    border: none;              /* Remove a borda padrão */
    height: 1px;              /* Define a altura do hr */
    background-color: rgb(0, 0, 0);   /* Define a cor de fundo */
    width: 100%;                /* Define a largura do hr */
    margin: 20px auto;        /* Centraliza o hr horizontalmente com margem automática */
}
    </style>
</head>

<body>
    <!-- <center><h1>INDEX</h1></center> -->
    <img src="../img/logo.png" class="logo" alt="Logo">
    <h2 align="center">ADMINISTRADOR</h2>

    <div class="menu">
  <div class="item">
    <a href="#" class="link">
      <span> Menu </span>
      <svg viewBox="0 0 360 360" xml:space="preserve">
        <g id="SVGRepo_iconCarrier">
          <path
            id="XMLID_225_"
            d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393 c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393 s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"
          ></path>
        </g>
      </svg>
    </a>
    <div align="right" class="submenu">
      <div class="submenu-item">
      <a href="../Tela_Admin/Cadastro_Funcionario.php" class="submenu-link"> Cadastro de Funcionarios </a>
      </div>
      <div class="submenu-item">
      <a href="../Tela_Admin/Cadastro_cliente.php" class="submenu-link"> Cadastro de Clientes </a>
      </div>
      <div class="submenu-item">
      <a href="../Tela_Secretaria/Index.php" class="submenu-link"> Sair </a>
      </div>
    </div>
  </div>
</div>


    
    <hr>

    
   
</body>
</html>
