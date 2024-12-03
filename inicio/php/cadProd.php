
<?php 

include './scripts/conexao.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../css/favicon.ico" type="image/x-icon">
    <title>Cadastro de Produto</title>
</head>
<body>



<?php
    include './scripts/protect.php';
    ?>
    <nav><div id='navbar'><a href="./scripts/logout.php"><button id="voltar">Logout</button></a></div></nav>
    <br><br><br>
    <div class="container">
        <h1>Cadastro de Produto</h1>
        <form action="cadprod.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome do Produto:</label>
                <input type="text" id="nome" name="nome" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="preco">Preço:</label>
                <input type="number" step="0.01" id="preco" name="preco" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade em Estoque:</label>
                <input type="number" id="quantidade" name="quantidade" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
            <input type="hidden" name="formu" value="cadastrar">
        </form>
    </div>
    <a href="produtos.php"><button>Produtos</button></a>
</body>
</html>


<?php 

if($_POST != null){
    if(($_POST['nome'] != '') && ($_POST['quantidade'] != '')){ 
        $formu = $_POST['formu'];

        if($formu == 'cadastrar'){
            $nome = $conn->real_escape_string($_POST['nome']);
            $preco = $conn->real_escape_string($_POST['preco']);
            $quantidade = $conn->real_escape_string($_POST['quantidade']);

            $sql = "SELECT * FROM produtos WHERE nome= '$nome'";
            
            $res = $conn->query($sql);
            $quant = $res->num_rows;

            if($quant == 1){

                echo '<br>Produto ja cadastrado';
                die();

            }else{

                $sql = "INSERT INTO produtos (nome, preco, quantididade) VALUES ('{$nome}', '{$preco}', '{$quantidade}')";
                
                $res = $conn->query($sql);
        
                if($res === TRUE){
                    echo '<p>Produto cadastrado com sucesso</p>';
                    exit(); 
                }else{
                    echo 'Erro: ' . $sql . '<br>' . $conn->error; 
                }

            }

        }
    }
}

?>