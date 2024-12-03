
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
    <title>Inicio</title>
</head>
<body>
    
    <nav><div id='navbar'><a href="./scripts/logout.php"><button id="voltar">Logout</button></a></div></nav>
    <br><br><br>

    <?php
    
    include './scripts/protect.php';
    include './scripts/adm.php';
    echo '<a href="produtos.php"><button>Produtos</button></a>';

    ?>
    <h1>Ola, <?= $_SESSION['nome']?></h1>
    <p>este é o inicio da nossa pagina.</p>
    <p>Alguns de nossos produtos a seguir</p>

    <?php 
    
    $sql = "SELECT * FROM produtos ORDER BY RAND()";
    
    $res = $conn->query($sql);
    $quant = $res->num_rows;
    
    if($quant != 0){
        for($i = 0; $i<3;$i++){
            $produto = $res->fetch_assoc();
            echo '<div id="container"><table> <tr>';
                echo "<tr>
                        <td>".$produto['nome']." R$ ".$produto['preco']."
                        </td>
                        <td>
                            <p>Estoque: 
                        </td>
                        <td>".$produto['quantididade']."
                        </td>   ";
                        echo "</tr><tr><td colspan='4'><button>Adicionar ao carrinho</button></td></tr></table>";
                        echo'</div>';       
            }
        }
    ?>

    <a href="./index.php"><button>Sair</button></a>
</body>
</html>