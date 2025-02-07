//Iseseisev ülesanne 25

import java.io.BufferedReader;
import java.io.FileReader;

class CsvReader {
    public static void main(String[] args) {
       String file = "C:/Users/kevin/Downloads/students.csv";
       String line;
        try (BufferedReader br =
                     new BufferedReader(new FileReader(file))) {
            while((line = br.readLine()) != null){
                System.out.println(line);
            }
        } catch (Exception e){
            System.out.println(e);
        }
    }
}