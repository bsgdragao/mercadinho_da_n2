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
            <h1 id="funcTitle"> Manutenção de funcionários </h1> 
            <?php  require_once "./../utils/menuFunc.php"; ?>   
       <div id="formFunc">                
          <form name="formAddFunc" id="formAddFunc" method="POST" action="cadFunc.php" onsubmit="return validaFuncForm()"></p>
              <p>  Nome: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="text" name="nomeFunc" id="nomeFunc" placeholder="Nome do Funcionário" size="60" required></p>
              <p>  CPF : &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="float" name="cpfFunc" id="cpfFunc" placeholder="CPF  do Funcionário (Somente numeros)" size="60" required> </p>
              <p>  Cargo: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type="text" name="cargoFunc" id="cargoFunc" placeholder="Cargo do Funcionário" size="60" required></p>
              <p>  Data de Nascimento: &nbsp &nbsp &nbsp &nbsp &nbsp<input type="date" name="nascimento" id="nascimento" placeholder="Data de Nascimento" size="60" required></p>	
                 <?php  require_once "./../tasks/selectNivel.php"; ?></br>        
            <input type="submit" id="btAddFunc" value="Enviar" > 
          </form>
       </div>   
    </div>

</body>
<footer id="footer">
  <p>by: @BrunoG</p>
  </footer>
</html>
</html>