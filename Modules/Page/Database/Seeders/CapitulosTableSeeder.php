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
                'sinopsis' => 'El maestro cinematográfico venezolano, Román Chalbaud, expone su relación con el cine, el teatro y la poesía.  A sus 90 años de edad, nos pasea por su amplia trayectoria en el mundo de las artes y ofrece un adelanto sobre sus futuros proyectos. Habla sobre el progreso del cine nacional y exhorta a seguir haciendo audiovisuales. Te invitamos a buscar y ver el corto "La venus de nácar", de Efraín Gómez (1932), y la selección de los cortometrajes participantes en el Festival Manuel Trujillo Durán. ',
                'temporada_id' => 1,
                'nro_cap' => 1,
                'serie_id' => 1,
                'cover' => '/image/cineCorto/Web_CC-01_Chalbaud.jpg',
                'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/F0TcTsM6_Gc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
            ],
            [
                'name'=> 'Entrevista a Liliane Blaser',
                'sub_name' => 'Enseñar a aprender y aprender a enseñar',
                'sinopsis' => 'El maestro cinematográfico venezolano, Román Chalbaud, expone su relación con el cine, el teatro y la poesía.  A sus 90 años de edad, nos pasea por su amplia trayectoria en el mundo de las artes y ofrece un adelanto sobre sus futuros proyectos. Habla sobre el progreso del cine nacional y exhorta a seguir haciendo audiovisuales. Te invitamos a buscar y ver el corto "La venus de nácar", de Efraín Gómez (1932), y la selección de los cortometrajes participantes en el Festival Manuel Trujillo Durán. ',
                'temporada_id' => 1,
                'nro_cap' => 2,
                'serie_id' => 1,
                'cover' => '/image/cineCorto/Web_CC-02_Blaser.jpg',
                'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/3znhr_HzKxo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
            ],
            [
                'name'=> 'Entrevista a Andrés Rodríguez',
                'sub_name' => 'Cree en el “cine de descubrimiento”',
                'sinopsis' => 'El maestro cinematográfico venezolano, Román Chalbaud, expone su relación con el cine, el teatro y la poesía.  A sus 90 años de edad, nos pasea por su amplia trayectoria en el mundo de las artes y ofrece un adelanto sobre sus futuros proyectos. Habla sobre el progreso del cine nacional y exhorta a seguir haciendo audiovisuales. Te invitamos a buscar y ver el corto "La venus de nácar", de Efraín Gómez (1932), y la selección de los cortometrajes participantes en el Festival Manuel Trujillo Durán. ',
                'temporada_id' => 1,
                'nro_cap' => 3,
                'serie_id' => 1,
                'cover' => '/image/cineCorto/Web_CC-03_Rodriguez.jpg',
                'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/3znhr_HzKxo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
            ],
            [
                'name'=> 'Entrevista a Efterpi Charalambidis',
                'sub_name' => 'Ve la intuición como gran aliada para hacer cine',
                'sinopsis' => 'El maestro cinematográfico venezolano, Román Chalbaud, expone su relación con el cine, el teatro y la poesía.  A sus 90 años de edad, nos pasea por su amplia trayectoria en el mundo de las artes y ofrece un adelanto sobre sus futuros proyectos. Habla sobre el progreso del cine nacional y exhorta a seguir haciendo audiovisuales. Te invitamos a buscar y ver el corto "La venus de nácar", de Efraín Gómez (1932), y la selección de los cortometrajes participantes en el Festival Manuel Trujillo Durán. ',
                'temporada_id' => 1,
                'nro_cap' => 4,
                'serie_id' => 1,
                'cover' => '/image/cineCorto/Web_CC-04_Charalambidis.jpg',
                'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/KgPgAzKjj3M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
            ],
            [
                'name'=> 'Entrevista a Carlos Azpúrua',
                'sub_name' => '“El cine comprometido es una necesidad”',
                'sinopsis' => 'El maestro cinematográfico venezolano, Román Chalbaud, expone su relación con el cine, el teatro y la poesía.  A sus 90 años de edad, nos pasea por su amplia trayectoria en el mundo de las artes y ofrece un adelanto sobre sus futuros proyectos. Habla sobre el progreso del cine nacional y exhorta a seguir haciendo audiovisuales. Te invitamos a buscar y ver el corto "La venus de nácar", de Efraín Gómez (1932), y la selección de los cortometrajes participantes en el Festival Manuel Trujillo Durán. ',
                'temporada_id' => 1,
                'nro_cap' => 5,
                'serie_id' => 1,
                'cover' => '/image/cineCorto/Web_CC-05_Azpurua.jpg',
                'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/RApDEolTPlc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
            ],
            [
                'name'=> 'Entrevista a Edgar Rocca',
                'sub_name' => 'El reto del cine venezolano es verse en otros países',
                'sinopsis' => 'El maestro cinematográfico venezolano, Román Chalbaud, expone su relación con el cine, el teatro y la poesía.  A sus 90 años de edad, nos pasea por su amplia trayectoria en el mundo de las artes y ofrece un adelanto sobre sus futuros proyectos. Habla sobre el progreso del cine nacional y exhorta a seguir haciendo audiovisuales. Te invitamos a buscar y ver el corto "La venus de nácar", de Efraín Gómez (1932), y la selección de los cortometrajes participantes en el Festival Manuel Trujillo Durán. ',
                'temporada_id' => 1,
                'nro_cap' => 6,
                'serie_id' => 1,
                'cover' => '/image/cineCorto/Web_CC-06_Rocca.jpg',
                'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/wWaALeFiFMw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
            ],
            [
                'name'=> 'Entrevista a Luis Alberto Lamata',
                'sub_name' => '“Mi única certeza es que me gusta mucho hacer cine”',
                'sinopsis' => 'El maestro cinematográfico venezolano, Román Chalbaud, expone su relación con el cine, el teatro y la poesía.  A sus 90 años de edad, nos pasea por su amplia trayectoria en el mundo de las artes y ofrece un adelanto sobre sus futuros proyectos. Habla sobre el progreso del cine nacional y exhorta a seguir haciendo audiovisuales. Te invitamos a buscar y ver el corto "La venus de nácar", de Efraín Gómez (1932), y la selección de los cortometrajes participantes en el Festival Manuel Trujillo Durán. ',
                'temporada_id' => 1,
                'nro_cap' => 7,
                'serie_id' => 1,
                'cover' => '/image/cineCorto/Web_CC-07_Lamata.jpg',
                'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/wWaALeFiFMw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
            ],
            [
                'name'=> 'Entrevista a Andrés Rodríguez',
                'sub_name' => 'Salir de la zona de confort permite encontrar historias',
                'sinopsis' => 'El maestro cinematográfico venezolano, Román Chalbaud, expone su relación con el cine, el teatro y la poesía.  A sus 90 años de edad, nos pasea por su amplia trayectoria en el mundo de las artes y ofrece un adelanto sobre sus futuros proyectos. Habla sobre el progreso del cine nacional y exhorta a seguir haciendo audiovisuales. Te invitamos a buscar y ver el corto "La venus de nácar", de Efraín Gómez (1932), y la selección de los cortometrajes participantes en el Festival Manuel Trujillo Durán. ',
                'temporada_id' => 1,
                'nro_cap' => 8,
                'serie_id' => 1,
                'cover' => '/image/cineCorto/Web_CC-08_Rodriguez.jpg',
                'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/EJwklw9dm1I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
            ],
            [
                'name'=> 'Entrevista a Marcial Aguirre',
                'sub_name' => 'Hay que buscar un estilo propio',
                'sinopsis' => 'El maestro cinematográfico venezolano, Román Chalbaud, expone su relación con el cine, el teatro y la poesía.  A sus 90 años de edad, nos pasea por su amplia trayectoria en el mundo de las artes y ofrece un adelanto sobre sus futuros proyectos. Habla sobre el progreso del cine nacional y exhorta a seguir haciendo audiovisuales. Te invitamos a buscar y ver el corto "La venus de nácar", de Efraín Gómez (1932), y la selección de los cortometrajes participantes en el Festival Manuel Trujillo Durán. ',
                'temporada_id' => 1,
                'nro_cap' => 9,
                'serie_id' => 1,
                'cover' => '/image/cineCorto/Web_CC-09_Aguirre.jpg',
                'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/3Y6Hwkb0UNE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
            ],
            [
                'name'=> 'Entrevista a Ricardo Martínez',
                'sub_name' => 'La animación es una entrega total',
                'sinopsis' => 'El maestro cinematográfico venezolano, Román Chalbaud, expone su relación con el cine, el teatro y la poesía.  A sus 90 años de edad, nos pasea por su amplia trayectoria en el mundo de las artes y ofrece un adelanto sobre sus futuros proyectos. Habla sobre el progreso del cine nacional y exhorta a seguir haciendo audiovisuales. Te invitamos a buscar y ver el corto "La venus de nácar", de Efraín Gómez (1932), y la selección de los cortometrajes participantes en el Festival Manuel Trujillo Durán. ',
                'temporada_id' => 1,
                'nro_cap' => 10,
                'serie_id' => 1,
                'cover' => '/image/cineCorto/Web_CC-10_Martinez.webp',
                'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/gE2SjaDLKcc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
            ],
            [
                'name'=> 'Entrevista a Sergio Arria',
                'sub_name' => 'Hay que crear contenidos que sumen a la identidad nacional',
                'sinopsis' => 'El maestro cinematográfico venezolano, Román Chalbaud, expone su relación con el cine, el teatro y la poesía.  A sus 90 años de edad, nos pasea por su amplia trayectoria en el mundo de las artes y ofrece un adelanto sobre sus futuros proyectos. Habla sobre el progreso del cine nacional y exhorta a seguir haciendo audiovisuales. Te invitamos a buscar y ver el corto "La venus de nácar", de Efraín Gómez (1932), y la selección de los cortometrajes participantes en el Festival Manuel Trujillo Durán. ',
                'temporada_id' => 1,
                'nro_cap' => 11,
                'serie_id' => 1,
                'cover' => '/image/cineCorto/Web_CC-11_Arria.webp',
                'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/PoMBgJfLj8A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
            ],
            [
                'name'=> 'Entrevista a Alí Álvarez',
                'sub_name' => '“La irreverencia nos va a hacer revolucionar el cine”',
                'sinopsis' => 'El maestro cinematográfico venezolano, Román Chalbaud, expone su relación con el cine, el teatro y la poesía.  A sus 90 años de edad, nos pasea por su amplia trayectoria en el mundo de las artes y ofrece un adelanto sobre sus futuros proyectos. Habla sobre el progreso del cine nacional y exhorta a seguir haciendo audiovisuales. Te invitamos a buscar y ver el corto "La venus de nácar", de Efraín Gómez (1932), y la selección de los cortometrajes participantes en el Festival Manuel Trujillo Durán. ',
                'temporada_id' => 1,
                'nro_cap' => 12,
                'serie_id' => 1,
                'cover' => '/image/cineCorto/Web_CC-12_Alvarez.webp',
                'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/q0rr9F-j-18" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
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
