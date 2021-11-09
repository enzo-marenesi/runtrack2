<?php
$notes= [200, 204, 173, 98, 171, 404, 459];
foreach ($notes as $note ) {


if ($note % 2 == 0){
    echo "$note est paire" . "<br>";
}
else {
    echo "$note est impaire" . "<br>";
}
}
?>