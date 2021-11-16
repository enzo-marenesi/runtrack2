<?php

if (isset ($_GET["nombre"])) {
    if ($_GET["nombre"] % 2 == 0) {
        echo "Nombre pair";
    }
    else {
        echo "Nombre impair";
    }
}

?>


<html>
<form action="" method="get">
<label for="case">Nombre</label>
<input type="text" name="nombre"><br>
<input type="submit" value="Envoyer">

</html>
