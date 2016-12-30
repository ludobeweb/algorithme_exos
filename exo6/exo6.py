quitter = False
oui = "o"
non = "n"
reponse = ""
flag = False

while quitter == False:
	print("Bienvenue chez le perroquet du capitaine")
	perroquet = raw_input("entrez une phrase ou un mot: ")
	print(str(perroquet))
	flag = True

	while flag == True:
		reponse = raw_input("Voulez vous quitter o/n ?")

		if oui == reponse:
			quitter = True
			flag = False
		elif non == reponse:
			print("non")
			flag = False
		else:
			print("Je ne comprend pas ce que tu veut dire")
