<?php

namespace Modules\Page\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Page\Entities\Capitulos;

class CapitulosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Model::unguard();
        $capitulos =[
            [
                'name'=> 'Entrevista a Román Chalbaud',
                'sub_name' => 'Hacer cine en Venezuela es posible',
                'sinopsis' => 'El maestro cinematográfico venezolano expone su relación con el cine, el teatro y la poesía. Nos pasea por su amplia trayectoria en las artes y ofrece un adelanto sobre sus futuros proyectos.',
                'temporada_id' => 1,
                'nro_cap' => 1,
                'serie_id' => 1,
                'cover' => '/image/cineCorto/Web_CC-01_Chalbaud.jpg',
                'video' => 'https://www.youtube.com/embed/F0TcTsM6_Gc'
            ],
            [
                'name'=> 'Entrevista a Liliane Blaser',
                'sub_name' => 'Enseñar a aprender y aprender a enseñar',
                'sinopsis' => 'Esta destacada directora de cine documental visibiliza, desde el lente de su cámara, la realidad que los medios hegemónicos han querido ocultar a los venezolanos.',
                'temporada_id' => 1,
                'nro_cap' => 2,
                'serie_id' => 1,
                'cover' => '/image/cineCorto/Web_CC-02_Blaser.jpg',
                'video' => 'https://www.youtube.com/embed/3znhr_HzKxo'
            ],
            [
                'name'=> 'Entrevista a Andrés Rodríguez',
                'sub_name' => 'Creer en el “cine de descubrimiento”',
                'sinopsis' => 'Para este director caraqueño “hacer cine es vivir”. Está convencido de que en Venezuela se puede hacer audiovisuales y habla de su experiencia al trabajar proyectos desde lo social y humano.',
                'temporada_id' => 1,
                'nro_cap' => 3,
                'serie_id' => 1,
                'cover' => '/image/cineCorto/Web_CC-03_Rodriguez.jpg',
                'video' => 'https://www.youtube.com/embed/vY-_voHOeXM'
            ],
            [
                'name'=> 'Entrevista a Efterpi Charalambidis',
                'sub_name' => 'La intuición, gran aliada para hacer cine',
                'sinopsis' => 'Realizadora de las películas <i>Libertador Morales, el justiciero</i> y <i>¡Qué buena broma, Bromelia!</i>, esta directora venezolana reflexiona sobre su transitar por el camino del cine.',
                'temporada_id' => 1,
                'nro_cap' => 4,
                'serie_id' => 1,
                'cover' => '/image/cineCorto/Web_CC-04_Charalambidis.jpg',
                'video' => 'https://www.youtube.com/embed/KgPgAzKjj3M'
            ],
            [
                'name'=> 'Entrevista a Carlos Azpúrua',
                'sub_name' => '“El cine comprometido es una necesidad”',
                'sinopsis' => 'Actual presidente del CNAC y cineasta abocado a lo político-social. Expone cómo su trabajo ha cambiado la visión de nuestra realidad y da un abreboca de lo que se viene en el cine nacional.',
                'temporada_id' => 1,
                'nro_cap' => 5,
                'serie_id' => 1,
                'cover' => '/image/cineCorto/Web_CC-05_Azpurua.jpg',
                'video' => 'https://www.youtube.com/embed/RApDEolTPlc'
            ],
            [
                'name'=> 'Entrevista a Édgar Rocca',
                'sub_name' => 'El cine venezolano debe verse en otros países',
                'sinopsis' => 'Como director, productor y distribuidor de cine nacional analiza los Oscar 2022, habla de los retos del cine venezolano y latinoamericano, y anuncia el nombre de su nuevo proyecto',
                'temporada_id' => 1,
                'nro_cap' => 6,
                'serie_id' => 1,
                'cover' => '/image/cineCorto/Web_CC-06_Rocca.jpg',
                'video' => 'https://www.youtube.com/embed/wWaALeFiFMw'
            ],
            [
                'name'=> 'Entrevista a Luis Alberto Lamata',
                'sub_name' => 'Su única gran certeza es que le gusta hacer cine',
                'sinopsis' => 'El cine de historia es lo suyo. Sus audiovisuales han ganado reconocimiento dentro y fuera del país. Nos habla de su reciente serie <i>Carabobo, caminos de libertad</i>, y de su ópera prima, <i>Jericó</i>.',
                'temporada_id' => 1,
                'nro_cap' => 7,
                'serie_id' => 1,
                'cover' => '/image/cineCorto/Web_CC-07_Lamata.jpg',
                'video' => 'https://www.youtube.com/embed/18IwibyyAFA'
            ],
            [
                'name'=> 'Entrevista a Andrés Rodríguez',
                'sub_name' => 'Fuera de la zona de confort hay historias',
                'sinopsis' => 'Habla de <i>Golpe de vida</i>, el más reciente corto que hizo con su hermano Luis. Dice cómo fue hacer, en plena pandemia, este trabajo que expone la transformación de los jóvenes para crear su futuro.',
                'temporada_id' => 1,
                'nro_cap' => 8,
                'serie_id' => 1,
                'cover' => '/image/cineCorto/Web_CC-08_Rodriguez.jpg',
                'video' => 'https://www.youtube.com/embed/EJwklw9dm1I'
            ],
            [
                'name'=> 'Entrevista a Marcial Aguirre',
                'sub_name' => 'Hay que buscar un estilo propio',
                'sinopsis' => 'Es realizador audiovisual, entregado a la docencia. Habla de la enseñanza e investigación en el cine. Cree que el cine no ha muerto, que solo se ha transformado a raíz de las nuevas tecnologías.',
                'temporada_id' => 1,
                'nro_cap' => 9,
                'serie_id' => 1,
                'cover' => '/image/cineCorto/Web_CC-09_Aguirre.jpg',
                'video' => 'https://www.youtube.com/embed/3Y6Hwkb0UNE'
            ],
            [
                'name'=> 'Entrevista a Ricardo Martínez',
                'sub_name' => 'La animación es una entrega total',
                'sinopsis' => 'Animador audiovisual y profesor de la Unearte. Narra cómo hizo, en pandemia, su corto animado <i>La Batalla de El Rodeo</i>. Dice que la paciencia, dedicación y creatividad son pilares en este trabajo.',
                'temporada_id' => 1,
                'nro_cap' => 10,
                'serie_id' => 1,
                'cover' => '/image/cineCorto/Web_CC-10_Martinez.webp',
                'video' => 'https://www.youtube.com/embed/gE2SjaDLKcc'
            ],
            [
                'name'=> 'Entrevista a Sergio Arria',
                'sub_name' => 'Crear contenidos con identidad nacional',
                'sinopsis' => 'Este realizador audiovisual, integrante del movimiento latinoamericano de documentalistas contemporáneos, habla de la batalla de ideas y la ética para crear contenidos en el cine nacional.',
                'temporada_id' => 1,
                'nro_cap' => 11,
                'serie_id' => 1,
                'cover' => '/image/cineCorto/Web_CC-11_Arria.webp',
                'video' => 'https://www.youtube.com/embed/PoMBgJfLj8A'
            ],
            [
                'name'=> 'Entrevista a Alí Álvarez',
                'sub_name' => '“La irreverencia podría revolucionar el cine”',
                'sinopsis' => 'Su primer corto estuvo en el Mobile Film Festival 2018. Para este realizador y postproductor audiovisual, las nuevas tecnologías han cambiado lo elitista del cine. Cree en el cine independiente.',
                'temporada_id' => 1,
                'nro_cap' => 12,
                'serie_id' => 1,
                'cover' => '/image/cineCorto/Web_CC-12_Alvarez.webp',
                'video' => 'https://www.youtube.com/embed/q0rr9F-j-18'
            ],

            //CAPITULOS PARATE AHÍ

            [
                'name'=> 'Una visita a Caricuao',
                'sub_name' => '',
                'sinopsis' => 'Llegamos a Caricuao para mostrarte la diversión y el descanso que hay en sus espacios. Fuimos al Parque Universal de la Paz, Zoológico Caricuao y al parque de “skateboard” Nuevas Generaciones Urbanas.',
                'temporada_id' => 1,
                'nro_cap' => 1,
                'serie_id' => 6,
                'cover' => '/image/PA_TapaWEB_Cap1.webp',
                'video' => 'https://www.youtube.com/embed/YXqAHSevkMo'
            ],

            [
                'name'=> 'Casco histórico caraqueño',
                'sub_name' => '',
                'sinopsis' => 'El casco histórico de Caracas tiene mucho que contar, y por eso hicimos una parada en la Plaza Bolívar de Caracas, pasamos por la Casa Natal de Simón Bolívar y terminamos en el Museo Bolivariano.',
                'temporada_id' => 1,
                'nro_cap' => 2,
                'serie_id' => 6,
                'cover' => '/image/PA_TapaWEB_Cap2.webp',
                'video' => 'https://www.youtube.com/embed/0u7kUtBeMfQ'
            ],

            [
                'name'=> 'Casco histórico caraqueño 2',
                'sub_name' => '',
                'sinopsis' => 'Seguimos por el centro de Caracas. Esta vez, te invitamos a conocer la historia del Arco de la Federación, ubicado en El Calvario; a comer en Chocolates con Cariño y a recorrer la plaza El Venezolano.',
                'temporada_id' => 1,
                'nro_cap' => 3,
                'serie_id' => 6,
                'cover' => '/image/PA_TapaWEB_Cap3.webp',
                'video' => '"https://www.youtube.com/embed/pTPZWqpjr9Q'
            ],
            [
                'name'=> 'Parque Generalísimo Francisco de Miranda',
                'sub_name' => '',
                'sinopsis' => '¿Quieres saber dónde pasar un día diferente? El Parque Generalísimo Francisco de Miranda o parque del este te ofrece variedad de flora y fauna, planetario (el Humboldt), terrario, lago con botes y más.',
                'temporada_id' => 1,
                'nro_cap' => 4,
                'serie_id' => 6,
                'cover' => '/image/PA_TapaWEB_Cap4.webp',
                'video' => 'https://www.youtube.com/embed/T_H4FUNLxIY'
            ],

            
        ];

        foreach ($capitulos as $key => $capitulo) {
            $new_capitulos = new Capitulos();
            $new_capitulos->name = $capitulo['name'];
            $new_capitulos->sub_name = $capitulo['sub_name'];
            $new_capitulos->sinopsis = $capitulo['sinopsis'];
            $new_capitulos->temporada_id = $capitulo['temporada_id'];
            $new_capitulos->nro_cap = $capitulo['nro_cap'];
            $new_capitulos->serie_id = $capitulo['serie_id'];
            $new_capitulos->cover = $capitulo['cover'];
            $new_capitulos->video = $capitulo['video'];
            $new_capitulos->save();

        }
        // $this->call("OthersTableSeeder");
    }
}
