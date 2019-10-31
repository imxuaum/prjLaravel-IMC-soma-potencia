<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 1</title>
</head>
<body>

<div class="container">
    <center>
    <form action="atividade1/controle1" method="get">
        <label>Nome:</label>
        <input type="text" name="nome" required><br>
        <label>Altura:</label>
        <input type="text" name="altura" required><br>
        <label>Peso:</label>
        <input type="text" name="peso" required><br>
        <label>Idade:</label>
        <input type="text" name="idade" required><br>
        <label>Sexo:</label>
        <input type="radio" name="sexo" value="feminino">Feminino
        <input type="radio" name="sexo" value="masculino">Masculino<br><br>
        <button type="submit">Calcular IMC</button>
    </form>
    <button><a href="/">Voltar</a></button>
    </center>
</div>
    
</body>
</html>