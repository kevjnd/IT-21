//Harjutus 2

import java.util.Scanner;

class JavaH2 {

    //Põhiprogramm
    public static void main(String[]args) {
        //1.
        teisendamine();
        //2.
        float a = 5, b = 4;
        ellips(a, b);
        //3.
        teisendamine2();
        //4.
        float sportlane1 = sportlane();
        float sportlane2 = sportlane();
        System.out.println("Sportlase 1 kiirus on: " + sportlane1 +" km/h");
        System.out.println("Sportlase 2 kiirus on: " + sportlane2 +" km/h");
        float vahe = sportlane1 - sportlane2;
        System.out.println("Sportlaste vahe on: " + vahe);
        
    }
    
    //1. Alamprogramm teisendab tollid meetriteks ja kuvab vastuse
    public static void teisendamine() {
        double meeter;
        int toll = 1;
        meeter = toll/39.37;
        System.out.println(toll + " tolli = " + meeter + " meetrit");
        
    }

    //2. Alamprogramm ellipsi pindala leidmiseks. Ümarda vastus kaks komakohta
    public static void ellips( float a, float b)
    {
        float pindala;

        pindala = (float) (Math.PI) * a * b ;

        double ymardamine = Math.round(pindala*100)/100;
         
        System.out.println("Ellipsi pindala: " + ymardamine);
    }

    //3. Alamprogramm, mis teisendab etteantud minutid tundideks ja minutiteks.
    public static void teisendamine2() {
        int t = 85;

        int tunnid = t / 60;
        int minutid = t % 60;
        System.out.printf("Tunnid ja minutid: %d:%02d \n", tunnid, minutid);
    }

    //4. Alamprogramm aitab leida kahe sportlase kiiruse

    public static float sportlane(){
        Scanner in = new Scanner(System.in);

        //Küsitakse aega
        System.out.print("Sisesta aeg(h): ");
        int aeg = in.nextInt();

        //Küsitakse distantsi
        System.out.print("Sisesta distants(km): ");
        int distants = in.nextInt();

        //Leitakse sportlaste kiirus
        float kiirus = (float)distants / aeg;
        return kiirus;

    }
}