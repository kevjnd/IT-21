//Harjutus 3

import java.util.stream.*;

class JavaH3{

    //Põhiprogramm
    public static void main(String[]args) {
        
        //Ühemõõtmeline massiiv
        int numbrid [] = {12,5,10,10,28,17,5,19,0,13,0,22,7,0,17,2,24,1,13,29,0,7,16,8,7,4,27,8,8,23,26,25,15,2,26,1};
        
        //väljastab esimese elemendi väärtuse
        System.out.println(numbrid[0]);

        //Väljastab viimase elemendi väärtuse
        System.out.println(numbrid[35]);

        //Väljastab elementide arvu
        int numbriteArv = numbrid.length;
        System.out.println ("Numbreid kokku: " + numbriteArv);

        //Väljastab elementide summa
        int summa = IntStream.of(numbrid).sum();
        System.out.println("Numbrite summa on: " + summa);

        //Väljastab arvude aritmeetilise keskmise
        int keskmine = summa / numbriteArv;
        System.out.print("Arvude aritmeetiline keskmine on: " + keskmine);

        //Mitmemõõtmeline massiiv
        int numbrid2 [][]= {{1,23},{2,15},{3,29},{4,15},{5,26},{6,17},{7,26},{8,15},{9,28},{10,12},{11,24},{12,16},{13,21},{14,10},{15,10},{16,26},{17,27},{18,19},{19,14},{20,14},{21,14},{22,26},{23,20},{24,28},{25,29},{26,11},{27,28},{28,19},{29,25},{30,12}};
    
    }
}