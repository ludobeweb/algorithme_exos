
def countChar(word,char)
	word = ARGV[0]
	char = ARGV[1]
	resultat = 0
	i = 0

	#tant que index inferieur a la longueur du mot cela exectute le code ci-dessous
	while i < word.length
		#si a l'index ou je me trouve c'est bien un "n" j'incremente de 1
		if word[i] == char
			resultat += 1
		end
	#et je passe a l'index suivant
	i += 1
	end
	print "Le nombre de #{char} dans #{word} est: #{resultat}\r\n"

end

countChar(ARGV[0],ARGV[1])
