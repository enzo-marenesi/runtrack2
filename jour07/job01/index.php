<?php
$_SESSION['nbvisites']=0;
session_start();
if (isset($_GET['button'])) {
    session_unset();
}

else if (isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites']++;
    echo ''.$_SESSION['nbvisites'].'';
}
else {
    $_SESSION['nbvisites']=0;
}
?>

<form action="./index.php" method="get">
<input type="submit" name = "button" value="reset">
</form>
