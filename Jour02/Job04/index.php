<?php
for($Nombre = 0; $Nombre <= 100;$Nombre++){
    if ($Nombre % 3 == 0 && $Nombre % 5 == 0){
        echo "FizzBuzz" . "<br>";
    }
    else if ($Nombre % 3 == 0){
        echo "Fizz" . "<br>";
    }
    else if ($Nombre % 5 == 0){
        echo "Buzz" . "<br>";
    }
    else {
        echo $Nombre . "<br>";
    }
    
}

?>