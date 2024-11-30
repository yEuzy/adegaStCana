
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
    <?php
    include './scripts/protect.php';
    include './scripts/adm.php';
    ?>
    <h1>Ola, <?= $_SESSION['nome']?></h1>
    <p>este é o inicio da nossa pagina.</p>


    <a href="./scripts/logout.php"><button>Sair</button></a>
</body>
</html>