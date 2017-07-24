<?php

use Illuminate\Database\Seeder;

class users_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $users = [
          ['name' => 'Himeko', 'email' => 'prassaiyan@gmail.com', 'password' => '$2y$10$m04xWMt4IR7IPQb9YP4X4ud/X21TPKw7qEl1.g6Un84eGz7PyVZL.', 'role' => 3, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
          ['name' => 'Kirino', 'email' => 'admin @kirino.sexy', 'password' => '$2y$10$XWJ5lUTRwuzFXFcQIZUhDui9Gpu2ivlew3AI9E6u7qWv39JkWmk86', 'role' => 2, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ];

        DB::table('users')->insert($users);
    }
}
