<?php
// LOGIN1.php
session_start();
// EVITA QUE A PÁGINA SEJA ARMAZENADA EM CACHE
header("Cache-Control: no-cache, no-store, must-revalidate"); //HTTP 1.1
header("Pragma: no-cache"); //HTTP 1.0
header("Expires: 0"); //Proxies

// CONEXAO COM O BANCO DE DADOS
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinica_transforme_seu_sorriso";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    header("Location: index.php?msg=1");
    exit();
}

$usuario = $_POST['cpf'];
$senha = $_POST['senha'];


// CONSULTA SQL PARA VERIFICAR O USUARIO E SENHA
$sql = "SELECT nome, nivel FROM funcionarios WHERE cpf='$usuario' AND senha = MD5('$senha')";
echo $sql;
$result = $conn->query($sql);

if($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nome = $row['nome'];
    $nivel = $row['nivel'];
    // ARMAZENA O NOME DO USUARIO NA SESSÃO
    $nome = $_SESSION['nome'];
    
     if ($nivel == 1) {
        header("Location: ../Tela_Admin/HomeADM.php");
    } elseif ($nivel == 2) {
        header("Location: Home.php");
    }
} else {
    echo $sql;
    header("Location: index.php?msg=2");
}
$conn->close();
?>