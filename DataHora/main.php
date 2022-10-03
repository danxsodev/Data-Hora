<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Hora</title>
</head>

<body>
    <?php
        $dia_hoje = date("d/m/Y", time());
        $hora_agora = date("h:i:s", time());

        echo "<p>";
        echo "Hoje é dia $dia_hoje";
        echo "</p>";

        echo "<p>";
        echo "O horário de agora é $hora_agora";
        echo "</p>";
        
        echo "<script language='javascript'>setInterval('location.reload()', 1000);</script>";
    ?>
</body>
</html>