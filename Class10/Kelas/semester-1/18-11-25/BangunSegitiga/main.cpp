#include <iostream>

using namespace std;

int main()
{

    // LOOP SEDERHANA
    cout << "--- Contoh For Loop ---\n";
    for (int i = 1; i <= 5; i++)
    {
        cout << "Perulangan: " << i << "\n";
    }

    // LOOP BERSARANG
    cout << "\n--- For Loop Bersarang ---\n";
    for (int x = 1; x <= 3; x++)
    {
        cout << "Bagian ke-" << x << "\n";
        for (int y = 1; y <= 3; y++)
        {
            cout << "   Sub perulangan " << x << "-" << y << "\n";
        }
    }

    // SEGITIGA SAMA KAKI (TRIGONOMETRI)
    cout << "\n--- Segitiga Siku-Siku Rata Kiri ---\n";
    for (int i = 1; i <= 5; i++)
    {
        for (int j = 1; j <= i; j++)
        {
            cout << "*";
        }
        cout << "\n";
    }

    // SEGITIGA SAMA KAKI
    int tinggi;
    cout << "\n--- Pola Segitiga Sama Kaki ---\n";
    cout << "Masukkan tinggi: ";
    cin >> tinggi;

    for (int i = 1; i <= tinggi; i++)
    {
        for (int sp = tinggi; sp > i; sp--)
        {
            cout << " ";
        }
        for (int star = 1; star <= (2 * i - 1); star++)
        {
            cout << "*";
        }
        cout << "\n";
    }

    // BELAH KETUPAT
    int n;
    cout << "\n--- Pola Belah Ketupat (Bagian Atas) ---\n";
    cout << "Masukkan tinggi: ";
    cin >> n;

    for (int baris = 1; baris <= n; baris++)
    {

        for (int plus = 1; plus < baris; plus++)
        {
            cout << "+";
        }

        for (int star = n; star >= baris; star--)
        {
            cout << "*";
        }

        cout << "\n";
    }

    return 0;
}
