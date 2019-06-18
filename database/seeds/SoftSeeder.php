<?php

use Illuminate\Database\Seeder;

class SoftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $drinks = [
            'Coca-Cola',
            'Eau Plate',
            'Jus d\'Orange',
            'Jus de Pomme',
            'Jus d\'Ananas',
            'Eau Gazeuze',
            'Red Bull',
            'Orangina',
            'Pepsi',
            'Fanta',
            'Coca-cola Zero'
        ];
        foreach ($drinks as $drink) {
            DB::table('softs')->insert(['name' => $drink]);
        }
    }
}
