<?php

if (isset ($_POST["username"]) && isset ($_POST["password"])) {
    if ($_POST["username"] == 'John' && ($_POST["password"]) == 'Rambo') {
        echo "C'est pas ma guerre";
    }
    else {
        echo "Votre pire cauchemar";
    }
}

?>


<html>
<form action="" method="post">
<label for="case">Username</label>
<input type="text" name="username">
<label for="case">Password</label>
<input type="text" name="password"><br>
<input type="submit" value="Envoyer">

</html>
