import java.util.Scanner;

class EvenOdd {

    public static void main(String[] args) {

        Scanner reader = new Scanner(System.in);

        System.out.print("Sisestage number: ");
        int num = reader.nextInt();

        if(num % 2 == 0)
            System.out.println(num + " Paarisarv");
        else
            System.out.println(num + " Paarituarv");
    }
}