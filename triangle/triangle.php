<?php
function pascal($hauteur = 5, $max = 0) {
  //On déclare une fonction pascal et on lui affecte une hauteur de 5 et une valeur de 0 par défaut

    if ($hauteur > 20) $hauteur = 20;
    // on limite la hauteur à 20
    $pascal = array(array(1));
    //on déclare un tableau pascal qui contient en index 0 un tableau qui a pour index0 la valeur 1

    echo 1 . "\n";
    // le sommet du tableau c'est 1
    for ($i = 1; $i <= $hauteur; $i++) {
      //En partant de l'index suivant et tant qu'on a pas atteint le nb de lignes max on incrémente
		$pascal[$i][0] = 1;
    //On prend l'index 0 du sous tableau est on y donne la valeur 1
        echo 1 . " ";
//on met des espaces après chaque chiffre
        $isMax = false;
        // c'est notre témoin pour savoir quand on atteint la valeur max
		for($j = 1; $j <= $i; $j++) {
      // j = la quantité de nombre et tant que j n'est pas égale au nombre de lignes on incrémente //
            $t = isset($pascal[$i-1][$j]) ? $pascal[$i-1][$j] : 0;
      /*Dans le sous tableau on vérifie l'index j de la ligne précécente existe
      1
    1 2 1
  1 3 3 1 pour trouver 3 par exemple je vérifie d'abord que 2 existe à la ligne précédente
      */
            $pascal[$i][$j] = $pascal[$i-1][$j-1] + $t;
// on remonte d'une ligne et on recule d'une colone
            echo $pascal[$i][$j] . " ";

            if ($pascal[$i][$j] >= $max and $max > 0)

                $isMax = true;
//si le nombre actuel est supérieur ou égale à notre max on passe notre à vrai

        }
        echo "\n";

        if ($isMax)
            break;
	}
}

echo "Nombre de lignes max : ";
$l = readline();
// l = le nombre de ligne readline permet de lire et de stocker la saisi utilisateur dans l
while (!is_numeric($l)) {
//tant que l n'est pas numérique on pose la question
    echo "Veuillez entrer une valeur numérique\n";
    echo "Nombre de lignes max : ";
    $l = readline();
}

echo "Valeur max : ";
$n = readline();
// n = la valeur max readline permet de lire et de stocker la saisi utilisateur dans n
while (!is_numeric($n)) {
    echo "Veuillez entrer une valeur numérique\n";
    echo "Valeur max : ";
    $n = readline();
}

pascal(intval($l), intval($n));
//on converti notre variable en entier
