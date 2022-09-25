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
                'sinopsis' => 'Esta producción original de Vive TV te acerca al mundo del cine, especialmente al venezolano.
                Mediante entrevistas a diversos exponentes del séptimo arte, Ana Teresa Pérez abre nuestra pantalla
                para que conozcas a las personas que están detrás de cada producción cinematográfica.
                En Cine Corto ella profundiza con los invitados sobre sus orígenes, experiencias, proyectos, la manera
                de ver y entender la realidad para plasmarla en un audiovisual.
                Aquí también podrás disfrutar de cortometrajes nacionales e internacionales.',
                'categoria_id' => 1,
                'cover' => '/image/LogoCC_1920x1080px.webp'
            ],
            [
                'name' => 'La Genial Historia',
                'sinopsis' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis neque placeat minima unde natus, incidunt nobis assumenda ipsum optio atque nemo, tempore vel minus nostrum repellendus. Maxime architecto nesciunt saepe?',
                'categoria_id' => 3,
                'cover' => '/image/TAPA_LGH2.jpg'
            ],
            [
                'name' => 'Chocolate',
                'sinopsis' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis neque placeat minima unde natus, incidunt nobis assumenda ipsum optio atque nemo, tempore vel minus nostrum repellendus. Maxime architecto nesciunt saepe?',
                'categoria_id' => 4,
                'cover' => '/image/CineCorto2_210x375px.png'
            ],
            [
                'name' => 'Cada Familia Una Escuela',
                'sinopsis' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis neque placeat minima unde natus, incidunt nobis assumenda ipsum optio atque nemo, tempore vel minus nostrum repellendus. Maxime architecto nesciunt saepe?',
                'categoria_id' => 4,
                'cover' => '/image/CadaFamiliaUnaEscuela210x375px.png'
            ],
            [
                'name' => 'CineCorto Vertical',
                'sinopsis' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis neque placeat minima unde natus, incidunt nobis assumenda ipsum optio atque nemo, tempore vel minus nostrum repellendus. Maxime architecto nesciunt saepe?',
                'categoria_id' => 4,
                'cover' => '/image/CineCorto_210x375px.png'
            ],
            [
                'name' => ' Párate Ahí',
                'sinopsis' => 'Con este programa conocerás lugares históricos, deportivos, culturales y recreativos de la Gran Caracas (Venezuela), que te harán salir de la rutina y crearán momentos agradables y especiales.',
                'categoria_id' => 1,
                'cover' => '/image/PA_TapaWEB_Cap4.webp'
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
