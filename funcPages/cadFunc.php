<?php

include "clsConexao.php";

$nome = $_POST['nomeFunc'];
$cpf = $_POST['cpfFunc'];
$cargo = $_POST['cargoFunc'];
$nascimento = $_POST['nascimentoFunc'];
$nivel = $_POST['selectNivel'];
$strcon = mysqli_connect('localhost','root','','mercadinho_da_n2') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO funcionarios VALUES ";
$sql .= "($nome', '$cpf', '$cargo','$nascimento', '$nivel')"; 
mysqli_query($strcon, $sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Cliente cadastrado com sucesso!";
echo "<a href='addFuncionario.html'>Clique aqui para realizar um novo cadastro</a><br>";
?>
