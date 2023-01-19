<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      Category::create(['name' => 'Loisirs']);
      Category::create(['name' => 'Cours et Atelier']);
      Category::create(['name' => 'Arts et Spectacles']);
      Category::create(['name' => 'Gastronomie']);

      
    }
}
