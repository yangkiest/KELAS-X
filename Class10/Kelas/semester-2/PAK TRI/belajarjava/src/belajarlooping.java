import java.util.Scanner;
    public class belajarlooping {

    public static void main(String[] args) {
        
         System.out.println("masukkan nomer urut: ");
        Scanner input1 = new Scanner(System.in);
        int angka = input1.nextInt();


        System.out.println("masukkan kalimat atau kata: ");
        Scanner nama = new Scanner(System.in);
        String kata = nama.nextLine();
        for (int i = 1; i <= angka; i++) {
            System.out.println(i + ". " + kata);
        }


        Scanner tinggi = new Scanner(System.in);
        System.out.println("masukkan tinggi segitiga: ");
        int n = tinggi.nextInt();


        /* TUGAS SEGITIGA*/
        
        // 1. Segitiga sudut bawah kiri
        System.out.println("\nSegitiga Sudut Bawah Kiri");
        for (int i = 1; i <= n; i++) {
            for (int j = 1; j <= i; j++) {
                System.out.print("* ");
            }
            System.out.println();
        }

        // 2. Segitiga sudut bawah kanan
        System.out.println("\nSegitiga Sudut Bawah Kanan");
        for (int i = 1; i <= n; i++) {
            for (int j = 1; j <= n - i; j++) {
                System.out.print("  ");
            }
            for (int j = 1; j <= i; j++) {
                System.out.print("* ");
            }
            System.out.println();
        }

        // 3. Segitiga sudut atas kiri
        System.out.println("\nSegitiga Sudut Atas Kiri");
        for (int i = n; i >= 1; i--) {
            for (int j = 1; j <= i; j++) {
                System.out.print("* ");
            }
            System.out.println();
        }

       
    }
}
    