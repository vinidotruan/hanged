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
        App\Category::create(['id' => 1,'name' => 'historia_brasil']);
        App\Category::create(['id' => 2,'name' => 'historia_eua']);
        App\Category::create(['id' => 3,'name' => 'primeira_guerra']);
        App\Category::create(['id' => 4,'name' => 'segunda_guerra']);
        App\Category::create(['id' => 5,'name' => 'historia_grecia']);
    }
}
