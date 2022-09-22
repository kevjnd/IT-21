//Iseseisev ülesanne 2


import java.util.Random;

public class Iseseisev2{

	public static void main(String args[])
	{
		
		Random rand = new Random();

        //Genereerib suva arvu vahemikus 0-999
		int rand_int1 = rand.nextInt(1000);
		// Väljastab suva arvu
		System.out.println("Random Integers: "+rand_int1);
    }
}
