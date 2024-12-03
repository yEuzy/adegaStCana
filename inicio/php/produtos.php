    <?php 

include './scripts/conexao.php';
include './scripts/navout.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../css/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <title>Listar Produtos</title>
</head>
<body>

    <h1>Pesquisar Produtos</h1>
    <div id="container">
    <table>
            <form action="" method='GET'>
                <tr>
                    <td><label for="nome">Nome</label></td>
                    <td><input type="text" name="nome"></td>
                </tr>
                <tr>
                    <td><label for="preco">Preço</label></td>
                    <td><input type="number" name="preco"></td>
            </tr>
                <tr>
                    <td><label for="quant">Quantidade</label></td>
                    <td><input type="text" name="quant"></td>
                </tr>
                <tr>
                    <td colspan="4">
                        <button type='submit'>Pesquisar</button>
                    </td>
                </tr>
            </form>
        </table>
    </div>
    <a href="inicio.php"><button>voltar</button></a>
    
</body>
</html>

<?php 

if(!empty($_GET)){
    if(!empty($_GET['nome']) || (!empty($_GET['preco']) || (!empty($_GET['quant'])))){
        $nome = $conn->real_escape_string($_GET['nome']);
        $preco = $conn->real_escape_string($_GET['preco']);
        $quantidade = $conn->real_escape_string($_GET['quant']);

        $sql = "SELECT * FROM produtos WHERE nome = '$nome' or quantididade = '$quantidade' or preco = '$preco'";
                
        $res = $conn->query($sql);
        $quant = $res->num_rows;

        if($quant != 0){
            echo '<h2>Resultados</h2>';


            for($i = 0; $i < $quant; $i++){
                $produto = $res->fetch_assoc();
                echo '<div id="container">
                        <table>
                            <tr>
                                <td>
                                    <p>Nome: 
                                </td>
                                <td>'.$produto['nome'].'
                                </td>
                            </tr>
                            <br>
                            <tr>
                                <td>
                                    <p>Preço: 
                                </td>
                                <td>'.'R$ ' .$produto['preco'].'
                                </td>
                            </tr>
                            <br>
                            <tr>
                                <td>
                                    <p>Quantidade: 
                                </td>
                                <td>'.$produto['quantididade'] . ($produto['quantididade'] == 1 ? " Unidade": " Unidades")
                                 .'
                                </td>
                            </tr>
                            
                        </table>
                    </div>'; 
                echo "<br>";
            } 
        }
            die();
    }else{
        $sql = "SELECT * FROM produtos";
                
        $res = $conn->query($sql);
        $quant = $res->num_rows;

        if($quant != 0){
            echo '<h2>Resultados</h2>';


            for($i = 0; $i < $quant; $i++){
                $produto = $res->fetch_assoc();
                echo '<div id="container">
                        <table>
                            <tr>
                                <td>
                                    <p>Nome: 
                                </td>
                                <td>'.$produto['nome'].'
                                </td>
                            </tr>
                            <br>
                            <tr>
                                <td>
                                    <p>Preço: 
                                </td>
                                <td>'.'R$ ' .$produto['preco'].'
                                </td>
                            </tr>
                            <br>
                            <tr>
                                <td>
                                    <p>Quantidade: 
                                </td>
                                <td>'.$produto['quantididade'] . ($produto['quantididade'] == 1 ? " Unidade": " Unidades")
                                .'
                                </td>
                            </tr>
                        </table>
                    </div><br>'; 
                
            }    
        }
            die();
    }
}
?>