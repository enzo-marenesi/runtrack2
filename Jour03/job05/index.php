<?php
$voyelles = 0;
$consonnes = 0;
$dic = [
    'consonnes' => ['b','c','d','f','g','h','j','k','l','m','n','o','p','q','r','s','t','v','w','x','z','B','C','D','F','G','H','J','K','L','M','N','P','Q','R','S','T','V','W','X','Z'],
    'voyelles' => ['a','e','i','o','u','y','A','E','I','O','U','Y'],
];
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";
$a = 0;
while(isset($str[$a])){
    $b = 0;
    $c = 0;
    while(isset($dic["voyelles"][$b])){
    if($str[$a] == $dic["voyelles"][$b]){
    $voyelles++;
    }
    $b++;
}
    while (isset($dic["consonnes"][$c])) {
    if($str[$a] == $dic["consonnes"][$c]) {
    $consonnes++;    
    }
    $c++;
    }
$a++;
}


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
            <th>Consonnes</th>
            <th>Voyelles</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>'.$consonnes.'</td>
            <td>'.$voyelles.'</td>
        </tr>
    </tbody>
</table>
</body>
</html>';

?>