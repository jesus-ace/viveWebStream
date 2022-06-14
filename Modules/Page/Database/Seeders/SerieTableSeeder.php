<?php

namespace Modules\Page\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Page\Entities\Serie;

class SerieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Model::unguard();
        $series =[
            [
                'name'=> 'CineCorto',
                'sinopsis' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis neque placeat minima unde natus, incidunt nobis assumenda ipsum optio atque nemo, tempore vel minus nostrum repellendus. Maxime architecto nesciunt saepe?',
                'categoria_id' => 1,
                'cover' => '/image/LogoCC_1920x1080px.webp'
            ],
            [
                'name' => 'La Genial Historia',
                'sinopsis' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis neque placeat minima unde natus, incidunt nobis assumenda ipsum optio atque nemo, tempore vel minus nostrum repellendus. Maxime architecto nesciunt saepe?',
                'categoria_id' => 3,
                'cover' => '/image/TAPA_LGH2.jpg'
            ],
           
        ];

        foreach ($series as $key => $serie) {
            $new_serie = new Serie();
            $new_serie->name = $serie['name'];
            $new_serie->sinopsis = $serie['sinopsis'];
            $new_serie->categoria_id = $serie['categoria_id'];
            $new_serie->cover = $serie['cover'];
            $new_serie->save();

        }
        // $this->call("OthersTableSeeder");
    }
}
