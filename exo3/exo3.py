
#importer le module sys
import sys

def countLetter(word,letter):

    resultat = 0
    i = 0
    #Savoir le nombre d element dans la liste d arguments
    if len(sys.argv) == 0:
        #sys.argv permet de manipuler les arguments [word] et [letter] dans la ligne de commande
        sys.argv[1:word]
        sys.argv[2:letter]


    #si la lettre a l'index i est egale a la lettre de la variable letter
    while i < len(word) :
        #si a l'index ou je me trouve c'est bien un "n" j'incremente de 1
	    if word[i] == letter :
		    resultat += 1
        #et je passe a l'index suivant
	    i += 1

    print('le nombre de ' + str(letter)+' est : ' + str(resultat))

countLetter(sys.argv[1],sys.argv[2])
