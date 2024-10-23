<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Profissional</title>
    <link rel="stylesheet" href="../Styles/StyleCadastro.css">
    <link rel="stylesheet" href="../Styles/StylePesquisa.css">
    <script type="text/javascript" src="../js/telefone.js"></script>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <style>
        /* BOTAO CONFIRMAR | EXCLUIR */

/* From Uiverse.io by Codecite */ 
.btnn {
  transition: all 0.3s ease-in-out;
  font-family: "Dosis", sans-serif;
}

.btnn {
  width: 70px;
  height: 40px;
  border-radius: 50px;
  background-image: linear-gradient(135deg, #2fb195 0%, #2fb195 100%);
  box-shadow: 0 20px 30px -6px rgba(#2fb195);
  outline: none;
  cursor: pointer;
  border: none;
  font-size: 15px;
  color: black;
}

.btne {
  width: 70px;
  height: 40px;
  border-radius: 50px;
  background-image: linear-gradient(135deg, #e82929 0%, #e82929 100%);
  box-shadow: 0 20px 30px -6px rgba(#e82929);
  outline: none;
  cursor: pointer;
  border: none;
  font-size: 15px;
  color: black;
}

.btnn:hover {
  transform: translateY(3px);
  box-shadow: none;
}

.btne:hover {
  transform: translateY(3px);
  box-shadow: none;
}

.btnn:active {
  opacity: 0.5;
}

.btne:active {
  opacity: 0.5;
}


  

        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 20px;
}

.container {
    max-width: 1100px;
    margin: auto;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

.top-bar {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    gap: 10px;
}

.search-bar {
    flex: 1;
    padding: 5px;
    border-radius: 4px;
    border: 1px solid #ddd;
}

.status-dropdown {
    padding: 5px;
    border-radius: 4px;
    border: 1px solid #ddd;
}

.total {
    margin-left: auto;
    font-weight: bold;
}

.form-section {
    background: #fff;
    border-radius: 8px;
    padding: 20px;
}

.professional-form {
    display: flex;
    gap: 20px;
}

.left-section {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
}

.image-placeholder {
    width: 150px;
    height: 150px;
    background: #e0e0e0;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 4px;
    margin-bottom: 10px;
    font-size: 14px;
    color: #777;
}

.right-section {
    flex: 1;
}

.right-section label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.right-section input,
.right-section select {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.toggle-options {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}





.btn {
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
}

.btn-primary {
    background-color: #4CAF50;
    color: #fff;
}

.btn-secondary {
    background-color: #00BFFF;
    color: #fff;
}

.btn-danger {
    background-color: #FF6347;
    color: #fff;
}

.btn-add {
    background-color: #007BFF;
    color: #fff;
}

.btn-delete {
    background-color: #FF6347;
    color: #fff;
}

.btn-toggle {
    background: #ddd;
    color: #333;
    border: 1px solid #ccc;
    border-radius: 3px;
    padding: 5px 15px;
}

.btn-toggle.active {
    background: #4CAF50;
    color: #fff;
}

.form-buttons {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

/* .last-access {
    margin-top: 20px;
} */

select.estados {
    width: 150px !important;
}

div.pequeno {
    width: 150px;
}

div.nome {
    display: flex; 
    gap: 10px; 
    width: 1000px;
}

label.pequeno {
    width: 150px;
}

input.pequeno {
    width: 150px;
}

.input-container {
    display: flex;
    align-items: center;
}

.ddd {
    margin-right: 5px; /* Espaço entre o prefixo e o campo de entrada */
    font-weight: bold; /* Estilo opcional */
}
    </style>
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
                    <a href="Cadastro_Funcionario.php" class="submenu-link">Cadastro de Funcionarios</a>
                </div>
                <div class="submenu-item">
                    <a href="Cadastro_cliente.php" class="submenu-link"> Cadastro de Clientes </a>
                </div>
                <div class="submenu-item">
                    <a href="HomeADM.php" class="submenu-link"> HOME </a>
                </div>
                <div class="submenu-item">
                    <a href="../Tela_Secretaria/Index.php" class="submenu-link"> Sair </a>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="container">

         
        <div class="container-input">
            <input type="text" placeholder="Search" name="text" class="input">
                <svg fill="#000000" width="20px" height="20px" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                <path d="M790.588 1468.235c-373.722 0-677.647-303.924-677.647-677.647 0-373.722 303.925-677.647 677.647-677.647 373.723 0 677.647 303.925 677.647 677.647 0 373.723-303.924 677.647-677.647 677.647Zm596.781-160.715c120.396-138.692 193.807-319.285 193.807-516.932C1581.176 354.748 1226.428 0 790.588 0S0 354.748 0 790.588s354.748 790.588 790.588 790.588c197.647 0 378.24-73.411 516.932-193.807l516.028 516.142 79.963-79.963-516.142-516.028Z" fill-rule="evenodd"></path>
          </svg>
          
        </div>

    </div>

<br>
        <div class="container">
            <div class="form-section">
                <center><h2>Cadastro do Profissional</h2> </center>
                <br>

                <form class="professional-form" method="POST" action="BE_CF.php">
                    <div class="left-section">
                        <div class="image-placeholder">no image</div>
                    
                         </div>

                    <div class="right-section">
                        <div style="width: 600px;">
                            <label>Nome do Profissional*</label>
                            <input type="text" placeholder="Santiago" name="nome" id="nome" required>
                        </div>

                    <div style="align-items: center; width: 600px; display: flex; gap: 10px;">
                        <label class="pequeno">Sexo*</label>
                        <select required name="sexo" id="sexo">
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                        </select>
                        <label class="cpf">CPF*</label>
                        <input type="text" placeholder="000.000.000-00" name="cpf" id="cpf" maxlength="14" required>

                        <label>Senha*</label>
                        <input type="text" placeholder="senha" name="senha" id="senha" required>
                    </div>
                             
                    <label>Email*</label>
                    <input style="width: 600px;"type="email" name="email" id="email" placeholder="contato@simpleexmplo.com" required>
                    
                    <div>
                        <label >Data de Nascimento*</label>
                        <input class="pequeno" type="date" name="data" id="data" required>
                    </div>

                    <div style="display: flex; gap: 10px;">
                        <label>Estado*</label>
                        <select class="estados" id="estado" name="estado" id="estado" required>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>

                        <label>Cidade*</label>
                        <input style="width: 300px;" type="text" name="cidade" id="cidade" required>

                    </div>                 

                    <label>Bairro*</label>
                    <input style="width: 600px;" type="text" name="bairro" id="bairro" required>

                    <label>Rua*</label>
                    <input style="width: 600px;" type="text" name="rua" id="rua" required>

                    <label>N°*</label>
                    <input style="width: 600px;" type="number" name="numre" id="numre" required>

                    <label>CEP*</label>
                    <input style="width: 600px;" type="text" name="cep" id="cep" required>

                    <label>Telefone*</label>
                    <input style="width: 600px;" type="text" id="telefone" name="telefone" placeholder="47 99999-9999"
                    maxlength="14" onkeydown="javascript:fMasc(this,mTel);" required>
                    <label>Cargo*</label>
                    <input style="width: 600px;" type="text" name="cargo" id="cargo" placeholder="secretario"required>
                    
                    
                    <label>Grupo de Acesso</label>
                    <select style="width: 600px;" name="acesso" id="acesso">
                        <option value="1">Administrador</option>
                        <option value="2">secretario</option>
                    </select> 
            </div>                 
        </div>

            <div class="form-buttons"> 
                <!-- <form method="POST" action="BE_CF1.php"> -->
                    <input class="btnn" type="submit" value="Novo Cadastro">     
                <!-- </form>   -->

                <!-- <form method="POST" action="BE_CF.php">                        
                     <input class="btnn" type="submit" value="Novo Cadastro"> -->
                <!-- </form>          -->
            </div> 
        </form>        
    </div>
</div>
</body>
</html>