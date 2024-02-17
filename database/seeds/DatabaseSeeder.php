<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::create([
        	'name' => 'Admin',
        	'email' => 'admin@app.com',
        	'password' => Hash::make('password'),
         'user_type' =>'Admin',
         'delete_able' => false,
        	'status' => 0,
        	'is_admin' => 1
        ]);
    }
}
