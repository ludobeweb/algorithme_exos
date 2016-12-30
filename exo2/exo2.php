<?php
$tableau = array(3, 20, 15, 28, 6, 52, 9);
$switch = "";
$sorted = False;

while($sorted == False){
	$moved = False;
	$i = 0;
	while ($i < count($tableau) -1){
		if ($tableau[$i+1] > $tableau[$i]){
			
			$switch = $tableau[$i] ;
			$tableau[$i] = $tableau[$i + 1] ;
			$tableau[$i + 1] = $switch ;
			$moved = True ;

		}
		$i += 1;
	}
		
	print_r($tableau);
	if ($moved == False){
		$sorted = True;
	}

}

?>
