
<!-- TELA DE CADASTRO DE PACIENTES, RECEPCIONISTA PODE ACESSAR E ADM TAMBEM -->


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/StyleCadastro.css">
    <link rel="stylesheet" href="../Styles/StyleFoto.css">
    <title>Cadastro de Clientes</title>
    <!-- <link rel="stylesheet" href="StyleCadastro.css"> -->
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 20px;
}

.container {
    max-width: 1600px;
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

.last-access {
    margin-top: 20px;
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
                <a href="Cadastro_Funcionarios.php" class="submenu-link">Cadastro de Funcionarios</a>
                </div>
                <div class="submenu-item">
                <a href="Cadastro_cliente.php" class="submenu-link"> Cadastro de Clientes </a>
                </div>
                <div class="submenu-item">
                  <a href="HomeADM.php" class="submenu-link"> HOME </a>
                </div>
                <div class="submenu-item">
                <a href="../Tela_Geral/Login.php" class="submenu-link"> Sair </a>
                </div>
              </div>
        </div>
    </div>

    <hr>


    <div class="container">
        <div class="top-bar">
            

        <div class="form-section">
            <h2>Cadastro de cliente</h2>
            <form class="professional-form">
                
               
<form class="file-upload-form">
  <label for="file" class="file-upload-label">
    <div class="file-upload-design">
      <svg viewBox="0 0 640 512" height="1em">
        <path
          d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-217c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l39-39V392c0 13.3 10.7 24 24 24s24-10.7 24-24V257.9l39 39c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-80-80c-9.4-9.4-24.6-9.4-33.9 0l-80 80z"
        ></path>
      </svg>
      <p>Drag and Drop</p>
      <p>or</p>
      <span class="browse-button">Browse file</span>
    </div>
    <input id="file" type="file" />
  </label>
</form>

                <!-- <div class="left-section">
                    <div class="image-placeholder">no image</div>
                    <button class="btn btn-add">+ Adicionar</button>
                    <button class="btn btn-delete">Excluir</button>
                </div> -->

                <div class="right-section">
                    <div style="display: flex; gap: 10px;">
                    <label>Nome do cliente*</label>
                    <input type="text" placeholder="gabriel" required>
                    
                    <label>Sexo*</label>
                    <select required>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                    </select>
                </div>
                <br>


                    <label>CPF*</label>
                    <input type="text" placeholder="000.000.000-00" required>

                    <label>Senha</label>
                    <input type="password" placeholder="********">
          
                    <label>Email*</label>
                    <input type="email" placeholder="contato@simplesagenda.com.br" required>
                    
                    <label>Data de Nascimento*</label>
                    <input type="date" required>

                    <label>Cidade*</label>
                    <input type="text" required>

                    <label>Bairro*</label>
                    <input type="text" required>

                    <label>Rua*</label>
                    <input type="text" required>

                    <label>N°*</label>
                    <input type="number" required>

                    <label>Cargo*</label>
                    <input type="text" placeholder="ex: secretario"required>

                    
                    
                <div class="form-buttons">
                <button class="btn btn-primary">Salvar</button>
                <button class="btn btn-danger">Excluir</button>
            </div>
                    </div>
                </div>
            </form>
            
        </div>
    </div>

</body>
</html>
