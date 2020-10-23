<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Category::create(['name' => 'historia_brasil']);
        App\Category::create(['name' => 'historia_eua']);
        App\Category::create(['name' => 'primeira_guerra']);
        App\Category::create(['name' => 'segunda_guerra']);
        App\Category::create(['name' => 'historia_grecia']);
    }
}
