<?php
include('conexao.php');

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$usuario = $_POST["usuario"];
$cpf = $_POST["cpf"];
$datan = $_POST["datan"];
$genero = $_POST["genero"];
$telefone = $_POST["telefone"];
$cidade = $_POST["cidade"];
$numero = $_POST["numero"];
$complemento = $_POST["complemento"];
$estado = $_POST["estado"];
$rua = $_POST["rua"];
$endereço = $_POST["endereço"];

$cadastrar = "INSERT INTO usuario (nome, email, senha, usuario, cpf, datadenascimento, genero, telefone, cidade, numero, complemento, estado, rua, endereco) VALUES ('$nome', '$email', '$senha', '$usuario', '$cpf', '$datan', '$genero', '$telefone', '$cidade', '$numero', '$complemento', '$estado', '$rua', '$endereço')";

if(mysqli_query($conn, $cadastrar)){
    echo "<h1>Novo cadastro realizado</h1><br>";
}else{
    echo "ERROR: " . $cadastrar . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>