<?php

use Illuminate\Database\Seeder;

class WordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Word::create(['name' => 'Aurea', 'hint' => 'Lei sancionada pela Princesa Dona Isabel', 'category_id' => 1]);
        App\Word::create(['name' => 'Vacina', 'hint' => 'Revolta que aconteceu no Rio de Janeiro', 'category_id' => 1]);
        App\Word::create(['name' => 'Medici', 'hint' => 'Brasil, ame-o ou deixe-o', 'category_id' => 1]);

        App\Word::create(['name' => 'Entente', 'hint' => 'formada por Rússia, Grã-Bretanha e França', 'category_id' => 3]);
    }
}
