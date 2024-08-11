<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->create([
            'name'=>'riham',
            'email'=>'riham1@gmail.com',
            'password'=> 'riham1@gmail.com',
            'usertype'=>'admin'
        ]);
    }
}
