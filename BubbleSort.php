
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

    /*
 * Tri bulle (Bubble sort)
 * initialiser N nombres aléatoirement dans un tableau
 * Appliquer le tri successif pour chaque nombre
 * afficher le tableau initial puis le tableau trié
 */
define("LIMIT", 20);

/*
 * Initialisation du tableau avec des valeurs tirées aléatoirement
 */
function init_tab() {
	$tab = array();
	for($i=0; $i<LIMIT; $i++) {
		$tab[$i] = rand(0, 100);
	}
	return $tab;
}

/*
 * Tri bulle
 */
function bubble_sort($tab) {
	for($i=0; $i<LIMIT-1; $i++) {
		for($j=0; $j<(LIMIT-1-$i); $j++) {
			if ($tab[$j] > $tab[$j+1] ) {
				$temp = $tab[$j+1];
				$tab[$j+1] = $tab[$j];
				$tab[$j] = $temp;
			}
		}
	}
	return $tab;
}

/*
 * Affichage d'un tableau horizontalement
 */
function aff_tab ($tab, $header) {
$str = "<TABLE>";
$lig1 = "<TR><TH>Indice</TH>";
$lig2 = "<TR><TH>$header</TH>";
	foreach ($tab as $cle => $val) {
		$lig1 .= "<TD>$cle</TD>";
		$lig2 .= "<TD>$val</TD>";
	}
	
	$lig1 .= "</TR>";
	$lig2 .= "</TR>";
	$str .= $lig1.$lig2."</TABLE>";
	return $str;
}

$tab = init_tab();	// Initialisation du tableau
echo aff_tab($tab, "Initialisation");	// Affichage de ce tableau
echo aff_tab(bubble_sort($tab), "Tri Bulle");	// Affichage du tableau trié
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