<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="./../utils/scripts.js"></script>
    <link rel="stylesheet" type="text/css" href="./../utils/style.css">
    <title>Mercadinho da N2</title>
</head>
    <div id="divBodyFuncionarios">
        <h1 id="funcTitle"> Manutenção de funcionários </h1>
        <?php  require_once "./../utils/menuFunc.php"; ?> 
    
        <div id="divTblFunc">             
            <table id="tbl_exibeFunc" BORDER RULES=rows>
            <CAPTION><h2>Funcionários cadastrados</h2></CAPTION>   
                  
            <tr>
                <th><h3>Funcionário:</h3></th>
                <th><h3>CPF:</h3></th>
                <th><h3>Cargo:</h3></th>
                <th><h3>Nascimento:</h3></th>
                <th><h3>Nível de acesso:</h3></th>  
            </tr>    
            <?php
                include_once './../daoCls/clsConexao.php';
                $query = "SELECT * FROM funcionarios";
                $result = Conexao::consultar( $query );

                while( $cat = mysqli_fetch_array($result)){
                    echo '<tr>'; 
                        echo '<td>'.$cat['nome'].'</td>';
                        echo '<td>'.$cat['cpf'].'</td>';
                        echo '<td>'.$cat['cargo'].'</td>';
                        echo '<td>'.$cat['nascimento'].'</td>';
                        echo '<td>'.$cat['nivel'].'</td>';
                    echo '</tr>';
                }
            ?>
            
            </table>
        </div>
    </div>
</html>