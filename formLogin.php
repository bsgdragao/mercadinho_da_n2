<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="scripts.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">    
</head>
<body>

   
  <div class="formLogin" id="myLogin">
           <h1 id="loginTitle">Login Administrativo</h1>

        <label for="usernameL" id="titleFormLogin"><b>Login</b></label>
        <input type="text" placeholder="Digite o login" name="usernameL" id="usernameL" required>

        <label for="pswL" id="titleFormLogin"><b>Senha</b></label>
        <input type="password" placeholder="Digite a senha" name="pswL" id="pswL"required>

        <button type="submit" class="bt_Login" onclick="loginForm()">Entrar</button>
        <button type="button" class="bt_Cancel" onclick="visibleLoginFalse()">Close</button>
 </div>
 
</body>
<footer id="footer">
  <p>by: @BrunoG</p>
</footer>
</html>
