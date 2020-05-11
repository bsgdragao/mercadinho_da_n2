<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="./../utils/scripts.js"></script>
    <link rel="stylesheet" type="text/css" href="./../utils/style.css"> 
    
</head>
  <body>
    <div id="formProds">                
        <form name="formProducts" id="formProducts" method="POST" action="./../productPages/insertProduct.php" onsubmit="return validaProductForm(), return confirm('Confirma o envio dos dados?')"></p>
              <p>  Nome:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="text" name="nome" id="nome" placeholder="Nome do Produto" size="60" required></p>
              <p>  Preco:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="float" name="preco" id="preco" placeholder="Preço do produto" size="60" required> </p>
              <p>  Quantidade: &nbsp<input type="number"  name="quantidade" id="quantidade" placeholder="Quantidade disponivel" size="60" required></p>              
              <p>  Validade:&nbsp &nbsp &nbsp &nbsp &nbsp<input type="date" name="validade" id="validade" placeholder="Data de validade" size="60" required></p>	
              <p>  Foto Url: &nbsp &nbsp &nbsp &nbsp<input type="text" name="foto" id="foto" placeholder="Url da Imagem" size="60" required></p>	                
              <?php  require_once "selectOpt.php"; ?></br>        
            <input type="submit" id="btEnvProds" value="Enviar" > 
        </form>
    </div>    
  </body>
  <footer id="footer">
  <p>by: @BrunoG</p>
  </footer>
</html>