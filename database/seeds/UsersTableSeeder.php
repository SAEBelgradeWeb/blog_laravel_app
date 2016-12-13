<?php

use App\User;
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
        User::create(['name' => 'Vladimir Lelicanin', 'email' => 'v.lelicanin@sae.edu', 'password' => Hash::make('admin123')]);
        factory(User::class, 20)->create();
    }
}
