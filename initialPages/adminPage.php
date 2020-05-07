<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="./../utils/scripts.js"></script>
    <link rel="stylesheet" type="text/css" href="./../utils/style.css">
    <title>Mercadinho da N2</title>
    
</head>
<body id=indexBody>
    <?php  require_once "./../utils/menuAdmin.php"; ?>   
   <div id="adminButtons">
    <a href="http://localhost/mercadinho_da_n2/funcPages/funcionarios.php" ><button id="btHome">Administrar Funcionários</button></a>
    <a href="http://localhost/mercadinho_da_n2/initialPages/building.php"><button id="btCatalog">Controle de estoque</button></a>
    <a href="http://localhost/mercadinho_da_n2/initialPages/adminPage.php"><button id="btAdmin">Controle de vendas</button></a>
    <a href="http://localhost/mercadinho_da_n2/index.php"><button id="btLogin">Logout</button></a>
</div>    
   <?php  require_once "./../tasks/formLogin.php"; ?> 
</body>
<footer id="footer"> 
  <p>by: @BrunoG</p>
</footer>
</html>  