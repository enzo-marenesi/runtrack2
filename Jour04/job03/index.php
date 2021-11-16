<?php

$pomp = 0;

foreach ($_POST as $key => $value) {
    $pomp++;
}

echo $pomp;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label for="case">Mail</label>
        <input type="text" name="mail"><br><br>
        <label for="case">Nom</label>
        <input type="text" name="nom"><br><br>

        <input type="submit" value="Envoyer">
 </form>    
</body>
</html>