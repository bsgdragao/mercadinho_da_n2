<?php

 require_once "./../daoCls/clsConexao.php";

 $nome = $_POST['nomeProduct'];
 $preco = $_POST['precoProduct'];
 $quantidade = $_POST['quantidadeProduct'];
 $validade = $_POST['validadeProduct'];
 $foto = $_POST['fotoProduct'];
 $categoria = $_POST['categoria'];

$query =  "INSERT INTO produtos VALUES ('$nome', '$preco', '$quantidade', '$validade', '$foto', '$categoria')";
Conexao::executar( $query );
echo "Produto cadastrado com sucesso!";
echo "<a href='addProduct.php'>Clique aqui para realizar um novo cadastro</a><br>";
?>