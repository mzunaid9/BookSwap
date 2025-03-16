<?php

namespace Database\Seeders;

use App\Models\livre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LivreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        livre::factory(10)->create();
    }
}
