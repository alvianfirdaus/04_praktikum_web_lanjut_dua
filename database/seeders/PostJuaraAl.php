<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostJuaraAl extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'no' => 1,
            'nama_kejuaraan' => 'KMIPN 4',
            'tanggal' => '01 Agustus 2022',
            'deskripsi' => 'Finalist Lomba Keamanan Syber',
            'subtotal' => 'Rp 400'
        ],
        [
            'no' => 2,
            'nama_kejuaraan' => 'Intercomp',
            'tanggal' => '17 Oktober 2022',
            'deskripsi' => 'Juara 1 Lomba Keamanan Syber',
            'subtotal' => 'Rp 300'
        ],
        [
            'no' => 3,
            'nama_kejuaraan' => 'PKM Polinema',
            'tanggal' => '1 Maret 2022',
            'deskripsi' => 'lolos seleksi polinema',
            'subtotal' => 'Rp 20'
        ],
        [
            'no' => 4,
            'nama_kejuaraan' => 'Lomba Vid Kreatif',
            'tanggal' => '5 Oktober 2021',
            'deskripsi' => 'Juara 4 Lomba vid kreatif jti',
            'subtotal' => 'Rp 200'
        ]
        ];
        DB::table('juaraalvian')->insert($data);
    }
}
