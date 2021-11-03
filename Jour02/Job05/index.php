<?php
$nombre = 1 ; 
$div = 0 ;
$boum = 1 ;

    for($nombre = 0; $nombre <1000; $nombre++){
        $boum = 0 ;
        for($div = 1; $div <1000; $div++){
            if($nombre % $div == 0){
                $boum++;
            }
        }
        if($boum == 2){
            echo $nombre . "<br>";
        }
    }

?>