
<!-- TELA DE CADASTRO DE PACIENTES, RECEPCIONISTA PODE ACESSAR E ADM TAMBEM -->


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/StyleCadastro.css">
    <title>Cadastro de Clientes</title>
    <!-- <link rel="stylesheet" href="StyleCadastro.css"> -->
    

</head>

<body>
    <img src="../img/logo.png" class="logo" alt="Logo">
    
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
                <a href="../Tela_Admin/Cadastro_Funcionario.php" class="submenu-link">Cadastro de Funcionarios</a>
                </div>
                <div class="submenu-item">
                <a href="../Tela_Admin/Cadastro_cliente.php" class="submenu-link"> Cadastro de Clientes </a>
                </div>
                <div class="submenu-item">
                  <a href="../Tela_Admin/HomeADM.php" class="submenu-link"> HOME </a>
                </div>
                <div class="submenu-item">
                <a href="../Tela_Secretaria/Index.php" class="submenu-link"> Sair </a>
                </div>
              </div>
        </div>
    </div>

    <hr>


    <div align="center" class="container">
        <table>
            <thead>
                <tr>
                    <th>Nome Completo</th>
                    <th>CPF</th>
                    <th>Sexo</th>
                    <th>Data de Nascimento</th> 
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" placeholder="Nome"></td>
                    <td><input type="text" placeholder="CPF"></td>
                    <td>    
                    <select>
                        <option value="masculino">masculino</option>
                        <option value="feminino">feminino</option>
                    </select>
                    </td>
                    <td><input type="date" placeholder="Data de Nascimento"></td>
                    <td><input type="text" placeholder="Endereço"></td>
                    <td><input type="text" placeholder="(47) 99999-9999"></td>
                    <td><input type="text" placeholder="Email"></td>
                    
                </tr>
            </tbody>
        </table>
    </div>

    <div class="centraliza">
        <button class="button2">Cadastrar</button>
    </div>
</body>
</html>
