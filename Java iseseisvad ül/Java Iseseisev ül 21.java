//Iseseisev ülesanne 25
class Iseseisev21 {
  
    public static void main(String[] args) {
    int t = 85;

    int tunnid = t / 60;
    int minutid = t % 60;
    System.out.printf("%d:%02d", tunnid, minutid);
    }
}