
<?php
    $Tableau = array(15, 10, 23, 2, 8, 9, 14, 16);
     
    echo "Avant:";
    for($K = 0; $K < count($Tableau); $K++) {
     echo  $Tableau[$K].", ";
    }
     
    for($I = count($Tableau) - 2;$I >= 0; $I--) {
     for($J = 0; $J <= $I; $J++) {
      if($Tableau[$J + 1] < $Tableau[$J]) {
       $t = $Tableau[$J + 1];
       $Tableau[$J + 1] = $Tableau[$J];
       $Tableau[$J] = $t;
      }
     }
    }
     
    echo "<br />Après:";
    for($L = 0; $L < count($Tableau); $L++) {
      echo $Tableau[$L].", ";
    }
    echo "<br />";


