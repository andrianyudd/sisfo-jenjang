<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; // <<< PASTIKAN BARIS INI ADA
use App\Models\User; // Pastikan ini juga ada jika Anda menggunakan model User

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Anda bisa mengaktifkan ini jika ingin 10 user random
        // User::factory(10)->create();

        // Ini adalah user yang Anda buat secara eksplisit
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('admin123'), // Ini baris yang menyebabkan error jika Hash tidak diimpor
        ]);

        // Jika Anda memiliki seeder lain, panggil di sini:
        // $this->call([
        //     AnotherSeeder::class,
        // ]);
    }
}