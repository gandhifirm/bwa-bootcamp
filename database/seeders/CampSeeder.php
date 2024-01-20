<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $camps = [
            [
                'title' => 'Gila Belajar',
                'slug' => Str::slug('Gila Belajar'),
                'price' => 280,
            ],
            [
                'title' => 'Baru Mulai',
                'slug' => Str::slug('Baru Mulai'),
                'price' => 140,
            ],
        ];

        foreach ($camps as $key => $camp) {
            Camp::create($camp);
        }
    }
}