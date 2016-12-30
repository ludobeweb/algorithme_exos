import java.util.*;
public class exo2 {
  public static void main(String[] args){    
	int tableau[] = {3,20,15,28,6,52,9};
	int permut = 0;
	boolean sorted = false;
	while (sorted == false){
		boolean moved = false;
		int i = 0;
		while (i <tableau.length -1){
			if(tableau[i+1] > tableau[i]){
				permut = tableau[i] ;
				tableau[i] = tableau[i + 1]; 
				tableau[i + 1] = permut;
				moved = true;
			
			
			}
			i ++;
		
		}
		System.out.println(Arrays.toString(tableau));
		if(moved == false){
			sorted = true;
		}
	}
	System.out.println("voila le tableau trier : "+Arrays.toString(tableau));
   }
}
