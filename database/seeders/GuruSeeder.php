<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB :: table('gurus')-> insert([
            'kodeguru'=> "001",
            'namaguru'=> "anis",
            'mapel'=> "mtk",
        ]);
    }
}
