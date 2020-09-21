<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        [
          'name' => 'toyotaro',
          'email' => 'toyo@gmail.com',
          'password' => Hash::make('password123'),
        ],[
          'name' => 'dictaro',
          'email' => 'dic@gmail.com',
          'password' => Hash::make('password456'),
        ]
      ]);
    }
}
