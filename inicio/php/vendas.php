
<?php
include './scripts/conexao.php';
include './scripts/navout.php';
include './scripts/protect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../css/favicon.ico" type="image/x-icon">
    <title>Vendas</title>
</head>
<body>
    <div id="sideb">
        <div id="imgdiv">
            <?php
                echo '<h2>' . $_SESSION["nome"] .'</h2><br>';
            ?>
            <img id="profimg" src="" alt="Nome do usuario">
        </div>
        <div id="options">
            <a href="">
                <button>Cadastrar Produtos</button>
            </a>
            <a href="">
                <button>Listar Vendas</button>
            </a>
            <a href="">
                <button>Listar Usuarios</button>
            </a>
        </div>
    </div>
    <script> let botao = document.getElementById("sidebutt")
            let sidsts = false
            botao.addEventListener("click", function(e){
                if(!sidsts){
                let sidebar = document.getElementById("sideb");
                sidebar.style.left = "-30%";
                botao.innerText = "X";
                sidsts = true;
                }else{
                    let sidebar = document.getElementById("sideb");
                    sidebar.style.left = "0%";
                    botao.innerText = "≡";
                    sidsts = false;
                }

            }
)</script>
    <?php
    echo ''
    ?>
</body>
</html>