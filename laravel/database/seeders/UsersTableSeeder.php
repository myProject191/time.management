<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
            'password' => Hash::make('hogehoge')
        ],[
            'name' => 'laravel1',
            'email' => 'laravel@php1',
            'password' => Hash::make('laravel081')
        ],[
            'name' => 'javascript',
            'email' => 'javascript@php',
            'password' => Hash::make('javascript08')
        ]);
    }
}
