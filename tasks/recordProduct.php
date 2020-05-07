<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="scripts.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css"> 
    
</head>
  <body>
    <div id="formProds">                
        <form name="formProducts" id="formProducts" method="POST" action="index.php" onsubmit="return confirm('Confirma o envio dos dados?')"></p>
              <p>  Nome:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="text" name="nome" id="nome" placeholder="preencher" required></p>
              <p>  Preco:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="float" name="preco" id="preco" placeholder="preencher" required> </p>
              <p>  Quantidade: &nbsp<input type="number"  name="quantidade" id="quantidade" placeholder="preencher" required></p>              
              <p>  Validade:&nbsp &nbsp &nbsp &nbsp &nbsp<input type="date" name="validade" id="validade" placeholder="preencher" required></p>	
              <p>  Foto do Produto: <input type="file"name="fotoproduto" placeholder="preencher" required></p>	                
              <?php  require_once "selectOpt.php"; ?></br>        
            <input type="submit" id="btEnvProds" value="Enviar" onclick="return validaProductForm()" > 
        </form>
    </div>    
  </body>
  <footer id="footer">
  <p>by: @BrunoG</p>
  </footer>
</html>