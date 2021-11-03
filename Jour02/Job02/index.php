<?php 
$nombre = 0;
while($nombre <= 1337){
    
    $nombre = $nombre + 1;
    if(!($nombre == 26||$nombre == 37 || $nombre == 88 || $nombre == 1111|| $nombre == 3233)){
        echo 'Voici le nombre ' .$nombre . "<br>";
    }

}

?>