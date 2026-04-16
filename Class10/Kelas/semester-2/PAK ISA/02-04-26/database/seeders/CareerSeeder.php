<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Career;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Career::create([
            'title' => 'Lulus SMK',
            'description' => 'Menyelesaikan pendidikan SMK Kelas 10 Semester 2 dan berhasil lulus dengan predikat baik.',
            'career_date' => '2028-06-15',
        ]);

        Career::create([
            'title' => 'Mulai Kuliah S1 Teknik Informatika ITS',
            'description' => 'Melanjutkan pendidikan ke jenjang Sarjana di Institut Teknologi Sepuluh Nopember (ITS), Jurusan Teknik Informatika.',
            'career_date' => '2028-08-15',
        ]);

        Career::create([
            'title' => 'Kerja Remote sebagai Frontend Developer',
            'description' => 'Memulai karier sebagai Frontend Developer dengan bekerja remote sambil melanjutkan kuliah S1, belajar tipis-tipis soal backend development.',
            'career_date' => '2028-09-01',
        ]);

        Career::create([
            'title' => 'Lulus S1 Teknik Informatika ITS',
            'description' => 'Menyelesaikan program studi S1 Teknik Informatika dengan total 4 tahun pendidikan (2028-2032).',
            'career_date' => '2032-06-20',
        ]);

        Career::create([
            'title' => 'Persiapan CPNS Pranata Komputer',
            'description' => 'Fokus pada persiapan tes seleksi CPNS posisi Pranata Komputer, melakukan belajar intensif dan mengikuti berbagai tahap seleksi (SKD, SKB, CAT, praktik, wawancara, medical check-up).',
            'career_date' => '2032-07-01',
        ]);

        Career::create([
            'title' => 'Lulus Seleksi CPNS dan Pengangkatan Pranata Komputer',
            'description' => 'Berhasil lolos semua tahapan seleksi CPNS Pranata Komputer dan mendapat SK pengangkatan sebagai PNS.',
            'career_date' => '2034-02-01',
        ]);
    }
}
