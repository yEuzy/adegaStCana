<?php
if(!isset($_SESSION)){
    session_start();
    if(!isset($_SESSION['id'])){
        die('<h1> Você não está logado</h1><br><a href="index.php"><button>Voltar</button></a>');
    }
}?>