import java.util.Scanner;

public class belajarpercabangan {

    public static void main(String[] args) {

        // percabangan if else 1
        int nilai = 45;
        if (nilai >= 70) {
            System.out.println("Selamat, Anda Lulus!");
        } else {
            System.out.println("Maaf, Anda Tidak Lulus.");
        }

        Scanner scanner = new Scanner(System.in);

        // percabangan if else 2
        System.out.print("Masukkan nilai anda: ");
        int nilai2 = scanner.nextInt();

        if (nilai2 < 0 || nilai2 > 100) {
            System.out.println("Nilai tidak valid");
        } else if (nilai2 >= 90) {
            System.out.println("A");
        } else if (nilai2 >= 80) {
            System.out.println("B");
        } else if (nilai2 >= 70) {
            System.out.println("C");
        } else if (nilai2 >= 60) {
            System.out.println("D");
        } else {
            System.out.println("E");
        }

        /* TUGAS ZODIAK */
        System.out.print("Masukkan bulan lahir Anda (1-12): ");
        int bulan = scanner.nextInt();

        System.out.print("Masukkan tanggal lahir Anda (1-31): ");
        int tanggal = scanner.nextInt();

        String zodiak = "";

        if ((bulan == 3 && tanggal >= 21) || (bulan == 4 && tanggal <= 19)) {
            zodiak = "Aries";
        } else if ((bulan == 4 && tanggal >= 20) || (bulan == 5 && tanggal <= 20)) {
            zodiak = "Taurus";
        } else if ((bulan == 5 && tanggal >= 21) || (bulan == 6 && tanggal <= 20)) {
            zodiak = "Gemini";
        } else if ((bulan == 6 && tanggal >= 21) || (bulan == 7 && tanggal <= 22)) {
            zodiak = "Cancer";
        } else if ((bulan == 7 && tanggal >= 23) || (bulan == 8 && tanggal <= 22)) {
            zodiak = "Leo";
        } else if ((bulan == 8 && tanggal >= 23) || (bulan == 9 && tanggal <= 22)) {
            zodiak = "Virgo";
        } else if ((bulan == 9 && tanggal >= 23) || (bulan == 10 && tanggal <= 22)) {
            zodiak = "Libra";
        } else if ((bulan == 10 && tanggal >= 23) || (bulan == 11 && tanggal <= 21)) {
            zodiak = "Scorpio";
        } else if ((bulan == 11 && tanggal >= 22) || (bulan == 12 && tanggal <= 21)) {
            zodiak = "Sagittarius";
        } else if ((bulan == 12 && tanggal >= 22) || (bulan == 1 && tanggal <= 19)) {
            zodiak = "Capricorn";
        } else if ((bulan == 1 && tanggal >= 20) || (bulan == 2 && tanggal <= 18)) {
            zodiak = "Aquarius";
        } else if ((bulan == 2 && tanggal >= 19) || (bulan == 3 && tanggal <= 20)) {
            zodiak = "Pisces";
        }

        System.out.println("Zodiak Anda adalah: " + zodiak);

        scanner.close();
    }
}
