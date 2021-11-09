<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
$a = 0 ;
$voyelle = "aeiouyAEIOUY";
$b = 0 ;

while(isset($str[$a])){
    
    while(isset($voyelle[$b]))
    if($str[$a] == $voyelle[$b])
    echo $voyelle[$b];
    $b++;
}
$a++;

?>