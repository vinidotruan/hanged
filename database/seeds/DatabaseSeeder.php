<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(CasualGameSeeder::class);
        $this->call(PvpGameSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(WordsSeeder::class);
    }
}
