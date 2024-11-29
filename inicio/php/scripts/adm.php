
<?php
include 'protect.php';
    if((int)$_SESSION['id'] === 1){
        echo '<a href="cadProd.php"><button>Cadastrar Produtos</button></a>';
        echo '<a href="produtos.php"><button>Produtos</button></a>';
    }
?>