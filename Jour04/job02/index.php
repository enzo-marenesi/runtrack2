<table><tr><td>Arguments</td><td>Valeurs</td></tr>
<?php

foreach ($_GET as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
}

?>
</table>

<html>

<form action="#" method="get">
<label for="case">Mail</label>
<input type="text" name="Mail">
<label for="case">Nom</label>
<input type="text" name="Nom"><br>
<input type="submit" value="Envoyer">

</html>
