<?php 
if(!isset($_SESSION)){
    session_start();
}

echo '
<div id="sideb">
        <div id="imgdiv">
             <h2>' .  $_SESSION["nome"]    .'</h2><br>
            <img id="profimg" src="" alt="Foto do usuario">
        </div>
        <div id="options">
        
            <a href="./inicio.php">
                <button>Inicio</button>
            </a>
            <a href="./cadProd.php">
                <button>Cadastrar Produtos</button>
            </a>
            <a href="./vendas.php">
                <button>Listar Vendas</button>
            </a>
            <a href="usuarios.php">
                <button>Listar Usuarios</button>
            </a>
        </div>
    </div>

<script> let botao = document.getElementById("sidebutt")
            let sidsts = false
            botao.addEventListener("click", function(e){
                if(!sidsts){
                    let sidebar = document.getElementById("sideb");
                    sidebar.style.left = "0%";
                    botao.innerText = "X";
                    sidsts = true;
                }else{
                    let sidebar = document.getElementById("sideb");
                    sidebar.style.left = "-30%";
                    botao.innerText = "≡";
                    sidsts = false;
                }

            }
)</script>';?>