<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
//        $this->call(CategorySeeder::class);
//        $this->call(SubKategoriSeeder6::class);
//        $this->call(SubKategoriSeeder2::class);
//        $this->call(SubKategoriSeeder1::class);
//        $this->call(SubKategoriSeeder2::class);
//        $this->call(SubKategoriSeeder3::class);
//        $this->call(SubKategoriSeeder4::class);
//        $this->call(SubKategoriSeeder5::class);


        $this->call(RincianKategoriSeeder::class);
//        $this->call(RincianKategoriSeeder26::class);

//        $this->call(SubKategoriSeeder::class);


//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
