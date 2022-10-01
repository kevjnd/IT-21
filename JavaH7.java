//Harjutus 7

import java.util.Scanner;

class JavaH7 {
    
    //Põhiprogramm
    public static void main(String[] args) {
        aritmeetilineTehe();
    }
        public static void aritmeetilineTehe() {
        
        //Tsükkel
        int tsykkel = 0;
        while (tsykkel < 3){

        //Küsib kasutajalt arve
        Scanner scanner = new Scanner(System.in);
        try {
            System.out.println("Sisesta esimene arv: ");
            int arv = scanner.nextInt();
            System.out.println("Sisesta teine arv: ");
            int arv2 = scanner.nextInt();
            tsykkel++;

            //Teeb antud arvudega tehte
            int s = arv / arv2;
            System.out.println("Vastus: " + s);
            } catch (Exception e) {
            System.out.println("! TULEB LISADA ARVUD !");
            }
        }
 }
}