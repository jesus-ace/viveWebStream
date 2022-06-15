<?php

namespace Modules\Page\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Page\Entities\Temporada;

class TemporadaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Model::unguard();

        $sessons =[
            ['sesson'=> '1'],
            ['sesson'=> '2']
          ];

        foreach ($sessons as $key => $sesson) {
            $new_sesson = new Temporada();
            $new_sesson->sesson = $sesson['sesson'];
            $new_sesson->save();

         }
        // $this->call("OthersTableSeeder");
    }
}
