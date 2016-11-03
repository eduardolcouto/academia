<?php

use Illuminate\Database\Seeder;

class SportClass extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('sport_classes')->truncate();
      //factory(\App\Modality::class,10)->create();
      factory(\App\SportClass::class)->create([
        'name' => 'Fc - Segunda - 08:00h',
        'qtde' => 8,
        'modality_id' => 1
      ]);

      factory(\App\SportClass::class)->create([
        'name' => 'Fc - Segunda - 09:00h',
        'qtde' => 8,
        'modality_id' => 1
      ]);

      factory(\App\SportClass::class)->create([
        'name' => 'Fc - Segunda - 11:00h',
        'qtde' => 8,
        'modality_id' => 1
      ]);

      factory(\App\SportClass::class)->create([
        'name' => 'Fc - Segunda - 19:00h',
        'qtde' => 10,
        'modality_id' => 1
      ]);

      factory(\App\SportClass::class)->create([
        'name' => 'Fc - Aulão',
        'qtde' => 20,
        'modality_id' => 1
      ]);
    }
}
