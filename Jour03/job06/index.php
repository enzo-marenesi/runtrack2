<?php
$str = 'Les choses que l\'on possede finissent par nous posseder.';
$a = -1;

while (isset($str[$a])) {
    echo $str[$a];
    $a = $a - 1;
}
?>