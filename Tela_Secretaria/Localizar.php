<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/StyleCadastro.css">
    <link rel="stylesheet" href="../Styles/StylePesquisa.css">
    <title>Pesquisar Clientes</title>
    <style>
        img.logo {
            width: 350px; /* Defina o tamanho desejado para a logo */
            height: auto;  /* Mantém a proporção da imagem */
            position: absolute;
            top: 10px;  /* Ajusta a distância do topo */
            left: 10px; /* Ajusta a distância da esquerda */
        }
    </style>
</head>

<body>

    <img src="../img/logo.png" class="logo" alt="Logo">
    
    <div class="menu">
  <div class="item">
    <a href="" class="link">
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
        <a href="Servicos.php" class="submenu-link"> Serviços </a>
      </div>
      <div class="submenu-item">
        <a href="Cadastro_Cliente.php" class="submenu-link"> Cadastrar novo cliente </a>
      </div>
      <div class="submenu-item">
        <a href="Localizar.php" class="submenu-link"> Localizar Clientes </a>
      </div>
      <div class="submenu-item">
      <a href="Home.php" class="submenu-link"> HOME </a>
      </div>
      <div class="submenu-item">
      <a href="Index.php" class="submenu-link"> Sair </a>
      </div>
    </div>
  </div>
</div>


    <hr>


    <div class="search">
        <input type="text" class="search__input" placeholder="Nome ou CPF">
        <button type="submit" class="search__button">
            <svg class="search__icon" aria-hidden="true" viewBox="0 0 24 24">
                <g>
                    <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path>
                </g>
            </svg>
        </button>
    </div>
</body>
</html>
