<?php

 require_once "clsConexao.php";

$nome = $_POST['nomeFunc'];
$cpf = $_POST['cpfFunc'];
$cargo = $_POST['cargoFunc'];
$nascimento = $_POST['nascimentoFunc'];
$nivel = $_POST['selectNivel'];

$query =  "INSERT INTO funcionarios VALUES ('$nome', '$cpf', '$cargo','$nascimento', '$nivel')";
Conexao::executar( $query );


?>