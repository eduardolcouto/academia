<?php

use Illuminate\Database\Seeder;

class ModalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('modalities')->truncate();
      factory(\App\Modality::class,10)->create();
    }
}
