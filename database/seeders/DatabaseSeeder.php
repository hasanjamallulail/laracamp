<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Database\Seeders\CampTableSeeder;
use Database\Seeders\CampBenefitTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //1st method
        $this->call([
                CampTableSeeder::class,
                CampBenefitTableSeeder::class,
                AdminUserSeeder::class,
            ]);

        // 2st method
        // Camp::insert($camps);
            
    }
}
