
<?php
include './scripts/conexao.php';
include './scripts/navout.php';

include './scripts/adm.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../css/favicon.ico" type="image/x-icon">
    <title>Usuarios</title>
</head>
<body>
    
    <?php 

    $sql = "SELECT * FROM usuarios";

    $res = $conn->query($sql); 
    $quant = $res->num_rows;

    if(isset($res)){

        if($quant > 0){
            echo '<h1> Usuarios </h1>';
            for($i = 0;$i<$quant;$i++){
                $usuario = $res->fetch_assoc();

                echo '
                <table>
                    <tr>
                        <td>
                            Nome: '. $usuario['usuario'].'
                        </td>
                    </tr>
            </table>';

            }
        }
    }

    ?>



</body>
</html>
