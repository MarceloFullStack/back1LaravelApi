<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()

    {
        {
            // $this->call(UsersTableSeeder::class);
            DB::table('users')->insert([
                'name' => 'marcelo',
                'email' => 'marcelo@marcelo.com',
                'password' => Hash::make('123'),
            ]);
        }
    }
}
