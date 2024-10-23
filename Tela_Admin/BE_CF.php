<?php
require_once("conectaDB.php");
$conexao = conectadb();

session_start();
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Recebe os valores do POST
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$data = $_POST['data'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$numre = $_POST['numre'];
$cep = $_POST['cep'];
$telefone = $_POST['telefone'];
$cargo = $_POST['cargo'];
$acesso = $_POST['acesso'];



$conexao->set_charset("utf8"); // ACERTAR A ACENTUAÇÃO

// Consulta SQL diretamente com os valores
$sql = "INSERT INTO `clinica_transforme_seu_sorriso`.`funcionarios` 
(`nome`, `sexo`, `data_nascimento`, `cpf`, `senha`, `estado`, `cidade`, 
`bairro`, `rua`, `numero_residencia`, `cep`, `telefone`, `email`, `cargo`, `nivel`) 
VALUES 
('$nome', '$sexo', '$data', '$cpf', '$senha','$estado', '$cidade', '$bairro', '$rua', '$numre', '$cep', 
'$telefone', '$email', '$cargo', '$acesso');";

// Executa a query diretamente
if (!$conexao->query($sql)) {
    die("Erro ao executar a consulta: " . $conexao->error);
} else {
    echo "<font size='3' face='Arial'> <center> Dados cadastrados com sucesso! </center></font>";
}
?>
