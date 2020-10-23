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
        App\Word::create([ "name"=> "Velha", "hint" => "Oficialmente a república dos estados unidos do Brasil", 'category_id' => 1]);
        App\Word::create([ "name"=> "Mercantil", "hint" => "Tipo de navios brasileiros que foram afundados na segunda guerra mundial", 'category_id' => 1]);
        App\Word::create([ "name"=> "Tancredo", "hint" => "Morreu antes de tomar posse", 'category_id' => 1]);
        App\Word::create([ "name"=> "Sarney", "hint" => "Rouba, mas faz", 'category_id' => 1]);
        App\Word::create([ "name"=> "MDB", "hint" => "Oposição aos partidos militares durante a ditadura", 'category_id' => 1]);
        App\Word::create([ "name"=> "Escambo", "hint" => "Atividade de troca antes de um sistema monetário", 'category_id' => 1]);
        App\Word::create([ "name"=> "Cana-de-açucar", "hint" => "Primeiro produto explorado na época colonial", 'category_id' => 1]);
        App\Word::create([ "name"=> "Guararapes", "hint" => "Batalha que originou o Exército Brasileiro", 'category_id' => 1]);
        App\Word::create([ "name"=> "Recife", "hint" => "Maior cosmopolita cidade da América durante governo de Maurício Nassau", 'category_id' => 1]);
        App\Word::create([ "name"=> "Salvador", "hint" => "Primeira capital do Brasil", 'category_id' => 1]);
        App\Word::create([ "name"=> "Iluminismo", "hint" => "Movimento responsável pelos três poderes políticos", 'category_id' => 1]);

        App\Word::create(['name' => 'Entente', 'hint' => 'formada por Rússia, Grã-Bretanha e França', 'category_id' => 3]);

    }
}
