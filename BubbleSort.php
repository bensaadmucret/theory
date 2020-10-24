
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
?>

    Algorithme Tri_a_Bulles
    local:   i , j , n, temp Î  Entiers naturels
    Entrée : Tab Î  Tableau d'Entiers naturels de 1 à n éléments
    Sortie : Tab Î  Tableau d'Entiers naturels de 1 à n éléments
   début
    pour i de n jusquà 1 faire // recommence une sous-suite (a1, a2, ... , ai)
     pour j de 2 jusquà i faire // échange des couples non classés de la sous-suite
      si Tab[ j-1 ] > Tab[ j ] alors // aj-1et aj non ordonnés
        temp ¬ Tab[ j-1 ] ;
        Tab[ j-1 ] ¬ Tab[ j ] ;
        Tab[ j ]  ¬ temp //on échange les positions de aj-1et aj
      Fsi
     fpour
    fpour
   Fin Tri_a_Bulles