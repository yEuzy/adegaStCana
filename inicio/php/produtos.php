<<<<<<< HEAD
    <?php 
=======
<?php 
>>>>>>> b4af1896e0b6b67c0276f976930afaf7334c2bba

include './scripts/conexao.php';

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
<<<<<<< HEAD
<nav><div id='navbar'><a href="./scripts/logout.php"><button id="voltar">Logout</button></a></div></nav>
<br><br><br>
=======
>>>>>>> b4af1896e0b6b67c0276f976930afaf7334c2bba
    <h1>Pesquisar Produtos</h1>
    <div id="container">
    <table>
            <form action="" method='GET'>
                <tr>
                    <td><label for="nome">Nome</label></td>
                    <td><input type="text" name="nome"></td>
                </tr>
<<<<<<< HEAD
                <tr>
=======
                <!-- <tr>
>>>>>>> b4af1896e0b6b67c0276f976930afaf7334c2bba
                    <td><label for="preco">Preço</label></td>
                    <td><input type="number" name="preco"></td>
            </tr>
                <tr>
                    <td><label for="quant">Quantidade</label></td>
                    <td><input type="text" name="quant"></td>
<<<<<<< HEAD
                </tr>
                <tr>
                    <td colspan="4">
=======
                </tr> -->
                <tr>
                    <td>
>>>>>>> b4af1896e0b6b67c0276f976930afaf7334c2bba
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

<<<<<<< HEAD
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
                    </div>'; 
                
            }    
        }
            die();
=======
if($_GET != null){
    $nome = $conn->real_escape_string($_GET['nome']);
        /* $preco = $conn->real_escape_string($_GET['preco']);
        $quantidade = $conn->real_escape_string($_GET['quant']); */

    $sql = "SELECT * FROM produtos;";
            
    $res = $conn->query($sql);
    $quant = $res->num_rows;

    if($quant != 0){
        echo '<h2>Resultados</h2>';
        for($i = 0; $i < $quant; $i++){
            $produto = $res->fetch_assoc();
        echo '<div id="container"><table><tr><td><p>Nome: </td><td>'.$produto['nome'].'</td></tr><br><tr><td><p>Preço: </td><td>'.$produto['preco'].'</td></tr><br><tr><td><p>Quantidade: </td><td>'.$produto['quantididade'].'</td></tr></div>';
        }
        die();
>>>>>>> b4af1896e0b6b67c0276f976930afaf7334c2bba
    }
}
?>