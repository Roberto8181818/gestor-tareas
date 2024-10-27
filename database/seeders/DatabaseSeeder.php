<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tarea;
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
        
        Category::factory(10)->create();
        Tarea::factory(20)->create();
    }
}
