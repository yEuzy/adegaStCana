
<?php
include 'protect.php';
    if((int)$_SESSION['id'] === 1){
        $_SESSION["adm"] = true;
        include 'sidebropen.php';
    }else{
        include 'sidebropen.php';
    }
?>