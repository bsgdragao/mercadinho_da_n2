<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="./../utils/scripts.js"></script>
    <link rel="stylesheet" type="text/css" href="./../utils/style.css">
    <title>Mercadinho da N2</title>
</head>
<body>

    <div id="divBodyFuncionarios">
            <h1 id="funcTitle"> Manutenção de estoque </h1> 
            <?php  require_once "./../utils/menuProduct.php"; ?>  
    <div id="formProds">                
        <form name="formProducts" id="formProducts" method="POST" action="./../productPages/clsAddProduct.php" onsubmit="return validaProductForm()"></p>
              <p>  Nome:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="text" name="nomeProduct" id="nomeProduct" placeholder="Nome do Produto" size="60" required></p>
              <p>  Preco:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="float" name="precoProduct" id="precoProduct" placeholder="Preço do produto" size="60" required> </p>
              <p>  Quantidade: &nbsp<input type="number"  name="quantidadeProduct" id="quantidadeProduct" placeholder="Quantidade disponivel" size="60" required></p>              
              <p>  Validade:&nbsp &nbsp &nbsp &nbsp &nbsp<input type="date" name="validadeProduct" id="validadeProduct" placeholder="Data de validade" size="60" required></p>	
              <p>  Foto Url: &nbsp &nbsp &nbsp &nbsp<input type="text" name="fotoProduct" id="fotoProduct" placeholder="Url da Imagem" size="60" required></p>	                
              <?php  require_once "selectOpt.php"; ?></br>        
            <input type="submit" id="btEnvProds" value="Enviar" > 
        </form>
    </div>  

</body>
<footer id="footer">
  <p>by: @BrunoG</p>
  </footer>
</html>
</html>