<?php
function hello($jour = false){
    if ($jour == true) {
        echo "Bonjour";  
    }
    elseif ($jour == false) {
        echo "Bonsoir";
    }
}
hello();
?>