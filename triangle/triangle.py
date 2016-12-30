T = [[1],[1,1]]

#affiche l'element dans liste a l index 0
print T[0]
#affiche l'element dans liste a l index 1
print T[1]
 
#liste allant du 2 a 9
for i in range(2,10):
    # sert a ajouter 1 en debut de liste
    T.append([1]) 
    #liste allant du 2 a l index
    for h in range(1, i):
        #la formule du triangle pascal
        T[i].append(T[i-1][h-1] + T[i-1][h])
    # sert a ajouter 1 en fin de liste
    T[i].append(1)  
    #affiche le resultat
    print T[i]
