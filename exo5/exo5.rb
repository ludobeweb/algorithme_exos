
def palindrome(word)
	flag = false
	i = 0
	j = word.length-1

	print "#{word}\n"

	while i < word.length	 
		if word[i] == word[j]
			j-=1
			i+=1
			flag = true
		else
			flag = false
			break
		end
	end
	if flag == true
		print "ce mot est un palindrome\n"
	else
		print "ce mot n'est pas un palindrome\n"
	end
end

def countLetter(word)
	i = 0
	j = 0
	nbLetter = 0
	alpha = "azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN"

	while i < word.length
    	while j < alpha.length
        	if alpha[j] == word[i]
            	nbLetter+=1
            	break
        	end
        	j+=1
    	end
    	j= 0
    	i+=1
	end
	print "#{nbLetter}\n"
end

def replaceLetter(word, charA, charB)
	i = 0
	
	print "#{word}\n"

	while i < word.length
		if word[i] == charA
			word2 = word.length - i
			word = word[0..i-1]+"#{charB}"+word[i+1,word2]
			print 

		end
		i+=1
	end
	print "la lettre #{charA} est remplacé par la lettre #{charB}\n resulat : #{word}\n"
end

def cutWord(word)
	i = 0
	space = " " 
	print "#{word}\n"

	while i < word.length
		if word[i] == space 
			word[i] = "\n"
		end
		i+=1
	end
	print "#{word}\n"
end

def main(word)
	args = ARGV.map(&:dup) #duplication de l'argv pour pouvoir le modifié
	word = ARGV[0]
	case ARGV[1]
		when "1"
			palindrome(word)
		when "2"
			countLetter(word)
		when "3" 
			replaceLetter(word, args[2], args[3])
		when "4"
			cutWord(args[0])
		else
			print "Try again\n"
	end
end
main(ARGV)
