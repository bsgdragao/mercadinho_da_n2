<?php

 require_once "./../daoCls/clsConexao.php";

$nome = $_POST['nomeFunc'];
$cpf = $_POST['cpfFunc'];
$cargo = $_POST['cargoFunc'];
$nascimento = $_POST['nascimento'];
$nivel = $_POST['selectNivel'];

$query =  "INSERT INTO funcionarios VALUES ('$nome', '$cpf', '$cargo','$nascimento', '$nivel')";
Conexao::executar( $query );
echo "Cliente cadastrado com sucesso!";
echo "<a href='addFuncionario.php'>Clique aqui para realizar um novo cadastro</a><br>";
?>