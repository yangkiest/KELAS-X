import java.util.Scanner;
    public class belajarlooping {

    public static void main(String[] args) {
        
        Scanner inputUser = new Scanner(System.in);
        
    System.out.print("masukkan nama anda: ");
    String nama = inputUser.nextLine();
        
    System.out.print("masukkan jumlah perulangan: ");
    int jumlah =  inputUser.nextInt();
    
    for (int i = 1; i <= jumlah; i++) {
        System.out.println(i + ". " + nama);
    }
    
    //segitiga siku siku 
    System.out.print("masukkan tinggi segitiga: ");
    int tinggi1 = inputUser.nextInt();
    
    for (int i = 1; i <= tinggi1; i++){
        for (int j = 1; j <= i; j++){
            System.out.print("*");
        }
        System.out.println();
    }
    
    //segitiga siku-siku terbalik
    System.out.print("masukkan tinggi segitiga: ");
    int tinggi2 = inputUser.nextInt();
    
    for (int i = tinggi2; i >= 1; i--){
        for (int j = 1; j <= i; j++){
            System.out.print("*");
    }
        System.out.println();
    }
    inputUser.close();
    }
    
}
    