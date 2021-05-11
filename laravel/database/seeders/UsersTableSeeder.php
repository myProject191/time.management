<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name' => 'hoge',
            'email' => 'hoge@hoge',
            'password' => 'hogehoge'
        ],[
            'name' => 'laravel',
            'email' => 'laravel@php',
            'password' => 'laravel08'
        ],[
            'name' => 'javascript',
            'email' => 'javascript@php',
            'password' => 'javascript08'
        ]);
    }
}
