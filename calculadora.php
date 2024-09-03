<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
    <?php include('resultado.php'); ?>
</head>
<body>
    <form method="POST" action=" ">
        calculadora<br>
        Número 1: <input type=text name=n1> <br/>
        Número 2: <input type=text name=n2><br/>
        <button type="submit" name=acao value=somar>somar</button>
    </form>
    <?php
    calcular(@$_POST["n1"], @$_POST["n2"], @$_POST["acao"]);
    ?>
</body>
</html>