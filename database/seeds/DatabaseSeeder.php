<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(users_seeder::class);
        $this->call(category_seeder::class);
        $this->call(file_seeder::class);
    }
}
