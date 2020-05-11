<?php
include "./../daoCls/clsConexao.php";

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$validade = $_POST['validade'];
$foto = $_POST['foto'];
$categoria = $_POST['selectCat'];
$strcon = mysqli_connect('localhost','root','','mercadinho_da_n2') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO produtos VALUES ";
$sql .= "('$nome', '$preco', '$quantidade', '$validade', $foto', '$categoria')"; 
mysqli_query($strcon, $sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Produto cadastrado com sucesso!";
echo "<a href='addProduct.php'>Clique aqui para realizar um novo cadastro</a><br>";
?>
