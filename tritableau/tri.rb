$tableau = [3, 20, 15, 28, 6, 52, 9]
$switch = ""
$sorted = false

while $sorted == false
	$moved = false
	$i = 0

	while $i < $tableau.length - 1
		if $tableau[$i + 1] > $tableau[$i]
		
			$switch = $tableau[$i] 
			$tableau[$i] = $tableau[$i + 1] 
			$tableau[$i + 1] = $switch 
			$moved = true
		end
		$i += 1
		
	end
	puts("boucle : " + $tableau.to_s)
	if $moved == false
		$sorted = true
	end
end
print $tableau.to_s + "\r\n"
 
