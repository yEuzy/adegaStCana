<?php 
    
    include './scripts/conexao.php';
    include './scripts/navout.php';
    include './scripts/adm.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../css/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vender</title>
</head>
<body>
    <h1>Vender</h1>
    <div id="container">
        <form action="vender.php" method="POST">

            
            
            <?php

                echo '  <label for="produto">Produto: </label>
                        <input list="produtosuge" id="produtosug">
                        <datalist id="produtosuge">';

                $sql = "SELECT * FROM produtos";

                $res = $conn->query($sql);
                $quant = $res->num_rows;

                if($quant!=0){
                    for($i=0;$i<$quant;$i++){
                        $produto = $res->fetch_assoc();
                            echo '  <option value='.$produto['nome']. '>'. $produto['nome'].'</option>';
                        }
                        echo '</datalist>';
                        /*echo '  <script>    inputprd = document.getElementById("produtosug");
                                            inputprd.addEventListener("keydown", () =>{
                                            for(i=0;i<'. $quant.';i++){
                                                if(inputprd.value==inputprd.list[' . $i . ']){
                                                    console.log("deucerto")
                                                    console.log(inputprd.list)
                    }
                    }}
                    )
                                            
                                </script>'; */     

                    
                }
                
            ?>
            

            
            

            <button type='submit'>Adicionar</button>
            </form>
                
    </div>
</body>
</html>