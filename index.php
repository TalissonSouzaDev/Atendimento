<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
   <link rel="stylesheet" href="index.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atendimento</title>
</head>
<body>

    <div id="conteudo">
        <h1>Atendimento</h1>
        <form action="calcular.php" method="post">
        <div class="posicao">
       <label for="">Inicio do Atendimento: <br>
        <input type="time" name="inicio" id="" value="08:00" class="input">
       </label><br>

       <label for="">Final do Atendimento: <br>
        <input type="time" name="final" id="" value="15:40" class="input">
       </label><br>
        <label for="">
            Guichê: <br>
            <input type="number" name="guiche" id=""  class="input" placeholder="Quantidade de Guichê" required>
        </label><br><br>
    
        <select name="atendimento" class="input" required>
            <option value="">Minuto de Atendimento</option>
            <option value="10">10 - Minutos</option>
            <option value="20">20 - Minutos</option>
            <option value="30">30 - Minutos</option>
            <option value="40">40 - Minutos</option>
            <option value="50">50 - Minutos</option>
            <option value="60">60 - Minutos</option>
        </select><br>

<div id="intevalo">
    <label for="">Intervalo: <br>
        <input type="time" name="intei" id="" class="input" value="00:00">
    </label><br>
    <label for="">Fim do Intervalo: <br>
        <input type="time" name="intef" id="" class="input" value="00:00">
    </label>
    
</div><br>

<label for="">Deseja Utilizar intevalo: <br>
    <input type="radio" name="radio"  onclick="sim()" checked> sim
    <input type="radio" name="radio"  onclick="nao()"> não
</label><br><br>
<button type="submit" name="calcular">Calcular</button>
</div>
</form>
    </div>

    
<footer> Desenvolvidor por Talisson Souza 😃</footer>
    <script src="app.js"></script>
    
</body>
</html>