//Harjutus 8.1

import java.util.Scanner;

class Ruumalad {

    //Programm risttahuka jaoks
	public static int risttahukas(int a, int b, int c) {
		int rist = a*b*c;
		
		return rist;
	}
	
    //Programm kuubi jaoks
	public static int kuup(int a) {
		int kuup = a*a*a;
		
		return kuup; 
		
	}
	
}

class Pindalad {

    //Põhiprogramm
	public static void main(String[] args) {

		//Küsib kasutaja sisestust ja laseb valida kahe tehte vahel
		try (Scanner scanner = new Scanner (System.in)) {
            System.out.print("\nVali tehe:\n Kuubi ruumala [1] \nRisttahuka ruumala [2] "); 
            String valik = scanner.next();
            
            int s;
            int a;
            int d;
            switch (Integer.parseInt(valik)) {
            case 1:
            	
				//Küsitakse arvu
            	System.out.println("Sisesta arv: ");
            	a = scanner.nextInt();
            	
				//Tehakse tehe ning väljastatakse vastus
            	s = Ruumalad.kuup(a);
            	System.out.println("Kuubi ruumala: "+s+" kuupi");
            	break;
            case 2:
            	
				//Küsitakse arve
            	System.out.println("Sisesta arv 1: ");
            	a = scanner.nextInt();
            	System.out.println("Sisesta arv 2: ");
            	int b = scanner.nextInt();
            	System.out.println("Sisesta arv 3: ");
            	int c = scanner.nextInt();
            	
				//Tehakse tehe ning väljastatakse vastus
            	d = Ruumalad.risttahukas(a,b,c);
            	System.out.println("Risttahuka ruumala: "+d+" kuupi");
            	break;
            default:
				
				//Vale valiku korral antakse veateade
            	System.out.print("Sellist valikut pole");
            	break;
            }
        } catch (NumberFormatException e) {
            e.printStackTrace();
        }
	}

}