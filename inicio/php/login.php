<?php
include './scripts/conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>
<body>
    
<h1>Login</h1>
    <div id="container">
        <form action="login.php" method="POST">
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
                        <button type="submit" name="enviar" >Entrar</button>
                        <input type="hidden" name="formu" value="login">
                    </td>

                </tr>
            </table>
        </form>
    </div>
<<<<<<< HEAD
    <a href="index.php"><button>voltar</button></a>
=======
>>>>>>> b4af1896e0b6b67c0276f976930afaf7334c2bba


    <?php
    
    if($_POST != null){
        if(($_POST['login'] != '') && ($_POST['senha'] !='')){

            $user = $conn->real_escape_string($_POST['login']);
            $senha = $conn->real_escape_string($_POST['senha']);
            $sql = "SELECT * FROM usuarios WHERE usuario = '$user' and senha = '$senha'";
            
            $res = $conn->query($sql);
            $quant = $res->num_rows;

            if($quant == 1){
                $usuario = $res->fetch_assoc();

                if(!isset($_SESSION)){
                session_start(); 
                
                $_SESSION['id'] = $usuario['id'];
<<<<<<< HEAD
                $_SESSION['nome'] = $usuario['usuario'];
                
=======
                $_SESSION['nome'] = $usuario['nome'];
>>>>>>> b4af1896e0b6b67c0276f976930afaf7334c2bba
                header('Location: ./inicio.php');
                
                }          
            }else{
                echo '<br><p>Usuario ou senha incorretos</p>';
            }
        }
    }

    ?>
</body>
</html>