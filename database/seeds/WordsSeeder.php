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
        App\Word::create(['name' => 'Jango', 'hint' => 'Último presidente pré ditadura', 'category_id' => 1]);

        App\Word::create(['name' => 'Obama', 'hint' => 'Presidente com maior impacto na representatividade', 'category_id' => 2]);
        App\Word::create(['name' => 'Independencia', 'hint' => '4 de julho', 'category_id' => 2]);
        App\Word::create(['name' => 'Comunismo', 'hint' => 'Um dos polos da guerra fria', 'category_id' => 2]);

        App\Word::create(['name' => 'Entente', 'hint' => 'formada por Rússia, Grã-Bretanha e França', 'category_id' => 3]);
        App\Word::create(['name' => 'Bandeira', 'hint' => 'Representa o país', 'category_id' => 3]);
        App\Word::create(['name' => 'Francisco Fernando', 'hint' => 'Morte que deu início a primeira guerra', 'category_id' => 3]);

        App\Word::create(['name' => 'Ariana', 'hint' => 'Raça pura', 'category_id' => 4]);
        App\Word::create(['name' => 'Suástica', 'hint' => 'Símbolo marcante do período', 'category_id' => 4]);
        App\Word::create(['name' => 'Hitler', 'hint' => 'Inimigo dos EUA e também de Mussoulini.', 'category_id' => 4]);
        
    }
}
