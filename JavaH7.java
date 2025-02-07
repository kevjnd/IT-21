//Harjutus 7

import java.util.Scanner;

class JavaH7 {
    
    //Põhiprogramm
    public static void main(String[] args) {
        aritmeetilineTehe();
    }

        //Alamprogramm küsib kasutajalt kahte arvu ning teeb tehte
        public static void aritmeetilineTehe() {
        
            //Tsükkel
            int tsykkel = 0;
            while (tsykkel < 3){

                //Küsib kasutajalt arvu
                try (
                Scanner scanner = new Scanner(System.in)) {
            
                    System.out.println("Sisesta esimene arv: ");
                    int arv = scanner.nextInt();
                    System.out.println("Sisesta teine arv: ");
                    int arv2 = scanner.nextInt();
                    tsykkel++;

                    //Teeb antud arvudega tehte
                    int vastus = arv / arv2;
                    System.out.println("Vastus: " + vastus);
                } 
            
                    catch (Exception e) {
                    System.out.println("! TULEB LISADA ARVUD !");
        
                        }
            }
        }
}