"# theory" 
#Algorithme Tri_a_Bulles
-    local:   i , j , n, temp Î  Entiers naturels
-    Entrée : Tab Î  Tableau d'Entiers naturels de 1 à n éléments
-    Sortie : Tab Î  Tableau d'Entiers naturels de 1 à n éléments
-   début
-    pour i de n jusquà 1 faire // recommence une sous-suite (a1, a2, ... , ai)
-     pour j de 2 jusquà i faire // échange des couples non classés de la sous-suite
-      si Tab[ j-1 ] > Tab[ j ] alors // aj-1et aj non ordonnés
-        temp ¬ Tab[ j-1 ] ;
-        Tab[ j-1 ] ¬ Tab[ j ] ;
-        Tab[ j ]  ¬ temp //on échange les positions de aj-1et aj
-      Fsi
-     fpour
-    fpour
-   Fin Tri_a_Bulles
