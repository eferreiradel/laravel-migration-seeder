<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        DB::table('trains')->insert([
            'azienda' => 'Trenitalia',
            'stazione_di_partenza' => $faker->city,
            'stazione_di_arrivo' => $faker->city,
            'orario_di_partenza' => $faker->time('H:i:s'),
            'orario_di_arrivo' => $faker->time('H:i:s'),
            'codice_treno' => $faker->randomNumber(5),
            'numero_carrozze' => $faker->numberBetween(1,20),
            'in_orario' => $faker->boolean,
            'cancellato' => $faker->boolean,
        ]);
    }
}