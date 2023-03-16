<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name'=>'Merchent',
                'email'=>'merchent@subscription.com',
                'role_id'=>1,
                'password'=> Hash::make('123456'),
            ],
            [
                'name'=>'Partner',
                'email'=>'partner@subscription.com',
                'role_id'=> 2,
                'password'=> Hash::make('123456'),
            ],
            [
                'name'=>'User',
                'email'=>'user@subscription.com',
                'role_id'=> 3,
                'password'=> Hash::make('123456'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
