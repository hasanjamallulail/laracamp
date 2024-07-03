<?php

namespace Database\Seeders;

use App\Models\Camp;
use Illuminate\Database\Seeder;


class CampTableSeeder extends Seeder
{
    public function run()
    {
        $camps = [
            [
                'title' => 'gila belajar',
                'slug' => 'gila-belajar',
                'price' =>  280,
                'create_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Baru Mulai',
                'slug' => 'baru-mulai',
                'price' =>  140,
                'create_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],

        ];

        foreach ($camps as $key => $camp) {
            camp::create($camp);
        }
    }
}
