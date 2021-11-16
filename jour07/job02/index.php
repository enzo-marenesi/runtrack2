<?php
session_start();
if (isset($_GET['button'])) {
    session_unset();
}
else if (isset($_COOKIE['nbvisites'])) {
    $_COOKIE['nbvisites']++;
    echo ''.$_COOKIE['nbvisites'].'';
}
else {
    $_COOKIE['nbvisites']=0;
}
?>

<form action="./index.php" method="get">
<input type="submit" name = "button" value="reset">
</form>
