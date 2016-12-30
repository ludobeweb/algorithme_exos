<?php
function palindrome($text)
{
	$flag = false;
	$i = 0;
	$j = strlen($text)-1;
	while ($i < strlen($text))
	{
		if($text[$i] == $text[$j])
		{
			$j--;
			$i++;
			$flag = true;
		}
		else
		{
			$flag = false;
			break;
		}
	}
	if($flag == true)
		echo("ce mot est un palindrome.\n\n");
	else
		echo("ce mot n'est pas un palindrome.\n\n");
}
function countLetter($text)
{
	$i = 0;
	$nbLetter = 0;
	while($i < strlen($text))
	{
		if(ctype_alpha($text[$i]))
		{
			$nbLetter++;
			$i++;
		}
		else
		{
			$i++;
		}
	}
	echo("Nombre de lettre : $nbLetter\n\n");
}
function replaceLetter($text,$charA,$charB)
{
	$i = 0;
	while($i < strlen($text))
	{
		if($text[$i] == $charA)
		{
			$text[$i] = $charB;
		}
		$i++;
	}
	echo("la lettre $charA est remplacer par la lettre  $charB\nResultat : $text\n\n");
}
function cutWord($text)
{
	$i = 0;
	$space = " ";
	while($i < strlen($text))
	{
		if ($text[$i] == $space)
		{
			$text[$i] = "\n";
		}
		$i++;
	}
	echo("$text\n\n");
}
$bigLoop = false;
$smallLoop = false;
while($bigLoop == false){
	$smallLoop = false;
	$text = strtolower(readline("Veuillez entrer une phrase ou un mot : "));
	echo("Veuillez choisir une action a effectuer\r\n\n");
	echo("  1. verifier si le mot ou phrase est un palindrome\r\n");
	echo("  2. nombres de caractere alphabetique dans le mot ou phrase.\r\n");
	echo("  3. remplacer un caractere par un autre.\r\n");
	echo("  4. decouper la phrase\r\n");
	echo("  5. quitter.\r\n\n");
	$choice = readline("Veuillez entrer le chiffre correspondant a votre choix : ");
	while($smallLoop == false){
		if($choice == "1"){
		  palindrome($text);
			$smallLoop = true;
			$exit = strtoupper(readline("entrer x pour quitter ou un autre caractere pour recommencer  : "));
			if($exit == "X"){
				$bigLoop = true;
			}else{}
		}elseif($choice == "2"){
			countLetter($text);
			$smallLoop = true;
			$exit = strtoupper(readline("entrer x pour quitter ou un autre caractere pour recommencer  : "));
			if($exit == "X"){
				$bigLoop = true;
			}else{}
		}elseif($choice == "3"){
			$charA = readLine("Veuillez entrez la lettre a modifier: ");
			$charB = readLine("Veuillez entrez la nouvelle lettre ");
			replaceLetter($text,$charA,$charB);
			$smallLoop = true;
			$exit = strtoupper(readline("entrer x pour quitter ou un autre caractere pour recommencer : "));
			if($exit == "X"){
				$bigLoop = true;
			}else{}
		}elseif($choice == "4"){
			cutWord($text);
			$smallLoop = true;
			$exit = strtoupper(readline("entrer x pour quitter ou un autre caractere pour recommencer: "));
			if($exit == "X"){
				$bigLoop = true;
			}else{}
		}elseif($choice == "5"){
			echo("Goodbye.\r\n");
			$smallLoop = true;
			$bigLoop = true;
		}else{
		  $choice = readline("Entrée incorrecte. Veuillez entrer un seul numéro correspondant à un choix : \r\n");
		}
	}
}
?>
