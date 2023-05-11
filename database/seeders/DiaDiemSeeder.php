<?php

namespace Database\Seeders;

use App\Models\Tour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiaDiemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tour::where('id',1)->first()->diadiem_tour()->createMany([
            [
                'diadiem'=>'dia diem 1',
                'trangthai'=>1,
            ],
            [
                'diadiem'=>'dia diem 2',
                'trangthai'=>1,
            ],
            [
                'diadiem'=>'dia diem 3',
                'trangthai'=>1,
            ]
        ]);
        Tour::where('id',2)->first()->diadiem_tour()->createMany([
            [
                'diadiem'=>'dia diem 1',
                'trangthai'=>1,
            ],
            [
                'diadiem'=>'dia diem 2',
                'trangthai'=>1,
            ],
            [
                'diadiem'=>'dia diem 3',
                'trangthai'=>1,
            ]
        ]);
    }
}
