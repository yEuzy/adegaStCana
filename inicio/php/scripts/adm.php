
<?php
include 'protect.php';
    if((int)$_SESSION['id'] === 1){
        echo '<a href="cadProd.php"><button>Cadastrar Produtos</button></a>';
<<<<<<< HEAD
=======
        echo '<a href="produtos.php"><button>Produtos</button></a>';
>>>>>>> b4af1896e0b6b67c0276f976930afaf7334c2bba
    }
?>