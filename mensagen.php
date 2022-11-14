<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
   <link rel="stylesheet" href="index.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo atendimento</title>
</head>
<body>
    <div id="conteudo">
        <div class="posicao">
            <div class="texto" >

            

        <h3>Resultado Do Calculo</h3>
        <p>
        <strong>Inicio Do Atendimento: </strong><?php if(isset($_SESSION['inicio'])){echo $_SESSION['inicio'];}  ?><br>
        <strong>Final Do Atendimento: </strong><?php if(isset($_SESSION['final'])){echo $_SESSION['final'];}  ?><br>
        <strong>Quantidade de Guichê: </strong><?php if(isset($_SESSION['guiche'])){echo $_SESSION['guiche'];}  ?><br>
        <strong>Minuto De Atendimento: </strong><?php if(isset($_SESSION['atendimento'])){echo $_SESSION['atendimento'];}  ?><br>
        <strong>Inicio Do Intevalor: </strong><?php if(isset($_SESSION['intei'])){echo $_SESSION['intei'];}  ?><br>
        <strong>Final do Intevalor: </strong><?php if(isset($_SESSION['intef'])){echo $_SESSION['intef'];}  ?><br>
    </p>
    <h4 class="res"><strong>A Quantidade de atendimento por cada <?php if(isset($_SESSION['atendimento'])){echo $_SESSION['atendimento'];}?> minutos é <?php if(isset($_SESSION['total'])){echo $_SESSION['total'];} ?> </strong> Atendimento</h4><br>
    <?php session_destroy(); ?>
    <a href="index.php">Novo Calculo</a>
        </div>
    </div>
    </div>

    
<footer> Desenvolvidor por Talisson Souza 😃</footer>
    <script src="app.js"></script>
    
</body>
</html>