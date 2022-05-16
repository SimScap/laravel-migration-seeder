<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for( $i = 0; $i < 10 ; $i++ ){
            $newTrain = new Train();
            $newTrain->azienda = $faker->word();
            $newTrain->stazione_partenza = $faker->city();
            $newTrain->stazione_arrivo = $faker->city();
            $newTrain->orario_partenza = $faker->time('H:i:s');
            $newTrain->orario_arrivo = $faker->time('H:i:s');
            $newTrain->codice_treno = $faker->numerify('train-####');
            $newTrain->numero_carrozze = $faker->numberBetween(1, 12);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();
            $newTrain->save();
        }
    }
}
