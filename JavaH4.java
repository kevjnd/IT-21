//Harjutus 4

import java.util.Scanner;

class JavaH4 {

    //Põhiprogramm
    public static void main(String[] args) {

        //Kasutaja sisestus
        Scanner scanner = new Scanner (System.in);
        System.out.println("Sisesta tekst: ");
        String Ksisestus = scanner.nextLine();

        //Väljastab kasutaja sisestuse suurtähtedes
        System.out.println(Ksisestus.toUpperCase());
    
        //Väljastab kasutaja teksti märkide arvu    
        if (Ksisestus == null || Ksisestus.trim().isEmpty()) {
            return ;
          }
          int tekstMargid = 0;
  
          for (int i = 0; i < Ksisestus.length(); i++) {
             if (Ksisestus.substring(i, i+1).matches("[^A-Za-z0-9]")) {
                tekstMargid++;
             }
  
          }
          System.out.println("Teksti märkide arv on: " + tekstMargid);
            
  
        //Väljastab kasutaja teksti sõnade arvu    
        if (Ksisestus == null || Ksisestus.trim().isEmpty()) {
            return ;
          }
          int tekstiSonad = 0;
  
          for (int i = 0; i < Ksisestus.length(); i++) {
             if (Ksisestus.substring(i, i+1).matches(" ")) {
                tekstiSonad++;
                tekstiSonad++;
             }
  
          }
          System.out.println("Teksti sõnade arv on: " + tekstiSonad);
        
    
        //Väljastab kasutaja sisestatud lause esimese sõna
        String eSona[] = Ksisestus.split(" ", 2);
        String fSona = eSona[0];
        System.out.printf("Lause esimene sõna on: %s", fSona);


    }
}  
    
    

