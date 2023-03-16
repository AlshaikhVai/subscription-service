<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name'=>'Upload',
                'merchent_id'=>1,
                'partner_id'=>2,
            ],
            [
                'name'=>'Download',
                'merchent_id'=>1,
                'partner_id'=>2,
            ],
            [
                'name'=>'Post',
                'merchent_id'=>1,
                'partner_id'=>2,
            ],
        ];

        foreach ($services as $key => $service) {
            Service::create($service);
        }
    }
}
