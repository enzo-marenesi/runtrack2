<?php
$Poule = true;
$nombre = 12;
$kekw = "La poule m'aime";
$a = 1.124;


echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>booléen</td>
            <td>$poule</td>
            <td>'.$Poule.'</td>
        </tr>
        <tr>
            <td>entier</td>
            <td>$nombre</td>
            <td>'.$nombre.'</td>
        </tr>
        <tr>
            <td>chaîne de caractères</td>
            <td>$kekw</td>
            <td>'.$kekw.'</td>
        </tr>
        <tr>
            <td>nombre a virgules flottante</td>
            <td>$a</td>
            <td>'.$a.'</td>
        </tr>
    </tbody>
</table>
</body>
</html>';
?>