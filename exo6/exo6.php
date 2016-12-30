<?php
$quitter = false;
$oui = "o"."\n";
$non = "n"."\n";
$reponse = "";
$flag = false;
while ($quitter == false) {
	echo("Bienvenue chez le perroquet du capitaine: "."\r"."\n");
	echo("Entrer une phrase ou un mot: "."\r"."\n");
	$reponse = fgets(STDOUT);
	echo "$reponse";
	$flag = true;
	while ($flag == true){
		echo("Voulez vous quitter o/n ? "."\r"."\n");
		$reponse = fgets(STDOUT);
		if ($reponse == $oui) {
			$quitter = true;
			$flag = false;
		}elseif ($non == $reponse){
			$flag = false;
		}else{
			echo("Je ne comprend pas ce que tu veut dire"."\r"."\n");
		}
	}
}
?>
