<?php

namespace Database\Seeders;

use App\Models\Komik;
use Database\Factories\KomikFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KomikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Komik::factory()->count(10)->create();
    }
}