import java.util.*;
//importation de la bibliotheque java

public class exo3{
//appel du fichier compile
	public static void main(String[] args){
		String word = args[0];
		String carac = args[1];
		int resultat = 0;
		int i = 0;
		while(i < word.length()){
			if(word.charAt(i) == carac.charAt(0)){
				resultat++;
			}
		i++;
		}
	System.out.println("le nombre de " +carac+ " est : "+resultat);
	}

}
