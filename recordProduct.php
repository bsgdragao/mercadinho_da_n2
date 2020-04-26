<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <script type="text/javascript" src="scripts.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css"> 
    
</head>
  <body>
    <div id="formProds">                
        <form name="formProducts" id="formProducts" method="POST" action="indexMe.php">
                Nome: <input type="text" name="nome" placeholder="preencher" required></br></br>
                Preco: <input type="float" name="preco" placeholder="preencher" required></br></br>
                Quantidade: <input type="number" name="quantidade" placeholder="preencher" required></br></br>
                Data atual: <input type="date"name="dataatual" placeholder="preencher" required></br></br>	
                Data de Validade: <input type="date"name="validade" placeholder="preencher" required></br></br>	
                Inserir Foto do Produto: <input type="file"name="fotoproduto" placeholder="preencher" required></br></br>	
                
                <?php  require_once "selectOpt.php"; ?>
</br>
        
            <input type="submit" id="btEnvProds" value="Enviar" onclick="return validar_form_contato()">
        </form>
    </div>    
  </body>
  <footer id="footer">
  <p>by: @BrunoG</p>
  </footer>
</html>