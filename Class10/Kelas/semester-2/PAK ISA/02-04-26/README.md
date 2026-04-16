# Web Jalur Karir Schadenfreude

Project ini dibuat untuk tugas RPL dengan frontend React dan backend Laravel + MySQL.

## Fitur yang sudah ada

- Halaman HOME
- Login & Register
- Dashboard dengan timeline karir (dark aesthetic, merah hitam)
- Halaman Profile untuk edit timeline karir
- Backend API Laravel untuk auth dan data career

## Jalur karir yang ditampilkan

- Kerja remote fokus frontend
- Belajar backend secara bertahap sambil kuliah
- Lulus SMK
- Persiapan tes PNS Pranata Komputer
- Lolos tes PNS dan menjadi Pranata Komputer

## Cara jalankan dari awal

1. Nyalakan laptop.
2. Buka XAMPP dan start MySQL.
3. Buka PowerShell di folder `C:\SMENDA\Class10\Kelas\semester-2\PAK ISA\02-04-26`.
4. Jalankan backend migrations dan seed:
    ```powershell
    php artisan migrate --seed
    ```
5. Jalankan backend Laravel:
    ```powershell
    php artisan serve
    ```
6. Buka terminal lain, masuk frontend:
    ```powershell
    cd frontend
    npm install
    npm run dev
    ```
7. Buka browser:
    ```
    http://localhost:5173
    ```

## Login cepat

- Email: `schadenfreude@example.com`
- Password: `password`

## Halaman-halaman

- `/` - Home: Intro tentang Schadenfreude
- `/login` - Login
- `/register` - Register
- `/dashboard` - Timeline karir (read-only)
- `/profile` - Edit timeline karir (add, edit, delete)

## File penting

- `routes/api.php` — API login, register, logout, career resource
- `app/Http/Controllers/AuthController.php` — auth register/login/logout
- `app/Http/Controllers/CareerController.php` — career timeline CRUD
- `app/Models/Career.php` — model career
- `frontend/src/components/Home.jsx`
- `frontend/src/components/Login.jsx`
- `frontend/src/components/Register.jsx`
- `frontend/src/components/Dashboard.jsx` - timeline view
- `frontend/src/components/Profile.jsx` - edit timeline
- `frontend/src/App.css` - dark theme styles

## Catatan

- Frontend pakai proxy `/api` ke backend `http://localhost:8000`
- Jika MySQL belum jalan, migration tidak akan jalan
- Data career sudah disiapkan di seeder
- Style: Dark aesthetic dengan dominan warna hitam dan merah
- Timeline di dashboard kayak jalan kehidupan dengan line vertikal dan dots
