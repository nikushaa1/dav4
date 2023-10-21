<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use App\Models\dav_4;
use Illuminate\Support\Facades\DB;

class dav_4 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $qvizebi = [
            [
                'name' => 'Qvizi 1',
                'description' => 'qviziiiii_1',
            ],
            [
                'name' => 'qvizi_2',
                'description' => 'qviziii_2',
            ],
            [
                'name' => 'qvizi_3',
                'description' => 'qviziii_3',
            ],
            [
                'name' => 'qvizi_4',
                'description' => 'qviziii_4',
            ],
            [
                'name' => 'qvizi_5',
                'description' => 'qviziii_5',
            ],
        ];
        DB::table('users')->insert([
            'name' => Str::random(10),
            'description' => Str::random(10).'@gmail.com',
            
        ]);



    }
}
