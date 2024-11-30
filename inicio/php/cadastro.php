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
    <title>Cadastro</title>
</head>
<body>

    <h1>Cadasatro</h1>
    <div id="container">
        <form action="cadastro.php" method="POST">
            <table>
                <tr>
                    <td>
                        <label for="login">Usuario: </label>
                    </td>
                    <td>
                    <input type="text" id="login" name="login">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="senha">Senha: </label>
                    </td>
                    <td>
                        <input type="password" id="senha" name="senha">
                    </td>
                </tr>
                <tr>
                    <td colspan='4'>
                        <button type="submit" name="enviar" >Enviar</button>
                        <input type="hidden" name="formu" value="cadastrar">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <a href="index.php"><button>voltar</button></a>

    <?php 

if($_POST != null){
    if(($_POST['login'] != '') && ($_POST['senha'] != '')){ 
        $formu = $_POST['formu'];

        if($formu == 'cadastrar'){
            $user = $conn->real_escape_string($_POST['login']);
            $senha = $conn->real_escape_string($_POST['senha']);

            $sql = "SELECT * FROM usuarios WHERE usuario = '$user' and senha = '$senha'";
            
            $res = $conn->query($sql);
            $quant = $res->num_rows;

            if($quant == 1){

                echo '<br>Usuario ja cadastrado';
                die();

            }else{

                $sql = "INSERT INTO usuarios (usuario, senha) VALUES ('{$user}', '{$senha}')";
                
                $res = $conn->query($sql);
        
                if($res === TRUE){
                    header('Location: ./sucesso.php');
                    exit(); 
                }else{
                    echo 'Erro: ' . $sql . '<br>' . $conn->error; 
                }

            }

        }
    }
}

    ?>
</body>
</html>