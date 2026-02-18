import java.util.Scanner;

public class belajarinputoutput {

    public static void main(String[] args) {

        Scanner inputUser = new Scanner(System.in);

        System.out.print("Inputkan nama anda: ");
        String nama = inputUser.nextLine();
        System.out.println("Nama yang di input: " + nama);

        System.out.print("Berapakah nomer absen anda: ");
        int absen = inputUser.nextInt();
        System.out.println("Nomer absen anda: " + absen);

        System.out.print("Berapakah uang sakuku: ");
        double uang = inputUser.nextDouble();
        System.out.println("Uang sakuku adalah Rp. " + uang);

        // buang ENTER sisa dari nextDouble
        inputUser.nextLine();

        System.out.print("Karakter apa yang anda suka: ");
        String simbol = inputUser.nextLine();
        System.out.println("Karakter yang anda suka: " + simbol);

        inputUser.close();
    }
}
