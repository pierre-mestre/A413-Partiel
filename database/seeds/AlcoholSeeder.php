<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlcoholSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alcohols = [
            'Ricard',
            'Jack Daniel\'s',
            'J&B',
            'Absolut Vodka',
            'Havana Club',
            'Get 27',
            'Martini',
            'Cruz',
            'Rosé'
        ];
        foreach ($alcohols as $alcohol) {
            DB::table('alcohols')->insert(['name' => $alcohol]);
        }
    }
}
