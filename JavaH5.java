//Harjutus 5

import java.util.Scanner;

class JavaH5 {

    //Põhiprogramm
    public static void main(String[] args) {
		jagamistehe();
	}
	//Alamprogramm lubab kasutajal sisestada kahte arvu ja teostada jagamistehet
	public static void jagamistehe() {
		int tsykkel = 0;
		//Tekitab tsükkli
		while(tsykkel < 3) {

            //Küsib kasutajalt arve
			Scanner scanner = new Scanner (System.in);
			System.out.print("Sisesta esimene arv: ");
			int arv = scanner.nextInt();
			System.out.print("Sisesta teine arv: ");
			int arv2 = scanner.nextInt();
			
			if (arv >= 0 & arv2 > 0) {
				double tehe = arv / arv2;
				System.out.println("Vastus: " + tehe);
				tsykkel++;
			}
			else {
				System.out.println("Midagi on valesti");
			}
		}
		
	}
}