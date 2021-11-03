<?php
  $nombre = 0;
  while($nombre <= 100){
      
      $nombre = $nombre + 1;
      if($nombre >= 0 && $nombre <=20){
          echo "<i> $nombre </i>" . "<br>";
      }
      else if($nombre == 42){
          echo  "Laplateforme" . "<br>";
      }
      else if($nombre >= 25 && $nombre <= 50){
          echo "<u> $nombre </u>" . "<br>";

      }
      else if($nombre <= 100){
          echo "$nombre" . "<br>";
      }

  }

?>