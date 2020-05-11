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
        <h1 id="funcTitle"> Manutenção de estoque </h1>
        <?php  require_once "./../utils/menuProduct.php"; ?> 
    
        <div id="divTblFunc">             
            <table id="tbl_exibeFunc" BORDER RULES=rows>
            <CAPTION><h2>Estoque de produtos</h2></CAPTION>   
                  
            <tr>
                <th><h3>Produto:</h3></th>
                <th><h3>Preco:</h3></th>
                <th><h3>Quantidade:</h3></th>
                <th><h3>Validade:</h3></th>
                <th><h3>Foto url:</h3></th> 
                <th><h3>Categoria:</h3></th> 
            </tr>    
            <?php
                include_once './../daoCls/clsConexao.php';
                $query = "SELECT * FROM produtos";
                $result = Conexao::consultar( $query );

                while( $cat = mysqli_fetch_array($result)){
                    echo '<tr>'; 
                        echo '<td>'.$cat['nome'].'</td>';
                        echo '<td>'.$cat['preco'].'</td>';
                        echo '<td>'.$cat['quantidade'].'</td>';
                        echo '<td>'.$cat['validade'].'</td>';
                        echo '<td>'.$cat['foto'].'</td>';
                        echo '<td>'.$cat['categoria'].'</td>';
                    echo '</tr>';
                }
            ?>
            
            </table>
        </div>
    </div>
</html>
