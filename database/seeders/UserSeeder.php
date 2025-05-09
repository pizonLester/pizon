<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    	User::insert([
    		'name' => 'admin',
    		'email'=> 'admin@gmail.com',
    		'password'=> Hash::make('111'),
    		'role_id' => 1,
    	],
    	[
    		'name' => 'user',
    		'email'=> 'user@gmail.com',
    		'password'=> Hash::make('111'),
    		'role_id' => 2,
        ]);
    }
}
