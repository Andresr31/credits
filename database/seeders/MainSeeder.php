<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Main;
use Illuminate\Support\Facades\DB;

class MainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mains')->delete();
        
        $main = Main::create([
            'name' => 'Credits',
            'capital' => 0,
            'global_interest' => 0.20,
            'default_numfees' => 24,
        ]);
    }
}
