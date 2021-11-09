<?php

$str= "Tout ces instants seront perdus dans le temps comme les larmes sous la pluie.";
$a = 0;

while(isset($str[$a])){
    echo $str[$a];
    $a = $a + 2;
} 

for ($a=1; isset($str[$a]); $a++){
    echo $str[$a];
}
?>