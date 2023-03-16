<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name'=>'merchent role',
            ],
            [
                'name'=>'partner role',
            ],
            [
                'name'=>'user role',
            ],
        ];

        foreach ($roles as $key => $role) {
            Role::create($role);
        }
    }
}
