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
            
            ///La genial Historia

            [
                'name'=> 'Conócenos',
                'sub_name' => '',
                'sinopsis' => 'Los niños muestran sus conocimientos sobre la historia de Venezuela, hablan de sus héroes favoritos y del gusto que les da enseñar el pasado que forjó a esta gran nación suramericana. ',
                'temporada_id' => 1,
                'nro_cap' => 1,
                'serie_id' => 2,
                'cover' => 'image/Lgh/LGH1_Cap1.webp',
                'video' => 'https://youtu.be/tCTSGBuAuAc'
            ],
            [
                'name'=> 'Batalla de Carabobo',
                'sub_name' => '',
                'sinopsis' => 'A 200 años de la Batalla de Carabobo, el elenco sigue la ruta histórica: ¿cómo fue ese enfrentamiento?, ¿qué eventos llevaron a esa batalla? y la importancia que tuvo para la independencia del país.',
                'temporada_id' => 1,
                'nro_cap' => 2,
                'serie_id' => 2,
                'cover' => 'image/Lgh/LGH1_Cap2.webp',
                'video' => 'https://youtu.be/dQ_exJ8GUmM'
            ],
            [
                'name'=> 'Diversidad del pueblo venezolano',
                'sub_name' => '',
                'sinopsis' => 'Conoce a los hombres y las mujeres que lucharon, con gran valentía, para poner fin al yugo español sobre Venezuela. Aprende sobre la diversidad de etnias que integró al Ejército Patriota.',
                'temporada_id' => 1,
                'nro_cap' => 3,
                'serie_id' => 2,
                'cover' => 'image/Lgh/LGH1_Cap3.webp',
                'video' => 'https://youtu.be/vrKwrEh8G4g'
            ],
            [
                'name'=> 'Simón Bolívar, nuestro Libertador',
                'sub_name' => '',
                'sinopsis' => 'Se describe a quién fue el más valiente prócer de Venezuela. Se aportan datos pocos conocidos del Libertador, como las personas que influyeron en sus ideales de libertad y en cuántas batallas luchó.',
                'temporada_id' => 1,
                'nro_cap' => 4,
                'serie_id' => 2,
                'cover' => 'image/Lgh/LGH1_Cap4.webp',
                'video' => 'https://youtu.be/OM9fcoEbLTg'
            ],
            [
                'name'=> 'Nevado, el fiel amigo de Simón Bolívar',
                'sub_name' => '',
                'sinopsis' => 'Nevado fue el perro mucuchíes de Simón Bolívar. Fue integrante del Ejército Patriota. Entérate de ¿cómo esta fiel mascota llegó a Bolívar?, ¿en cuántas batallas estuvo?, ¿quién lo cuidaba?',
                'temporada_id' => 1,
                'nro_cap' => 5,
                'serie_id' => 2,
                'cover' => 'image/Lgh/LGH1_Cap5.webp',
                'video' => 'https://youtu.be/G8HSth8_SRs'
            ],
            [
                'name'=> 'Heroínas de la Independencia de Venezuela',
                'sub_name' => '',
                'sinopsis' => 'Echa un vistazo a la vida de las mujeres valientes, leales y de convicción firme, que lo dieron todo por la emancipación del yugo español; ¿cómo participaron durante la independencia?',
                'temporada_id' => 1,
                'nro_cap' => 6,
                'serie_id' => 2,
                'cover' => 'image/Lgh/LGH1_Cap6.webp',
                'video' => 'https://youtu.be/aCrbYZitGsE'
            ],
            [
                'name'=> 'Protagonistas de la Batalla de Carabobo',
                'sub_name' => '',
                'sinopsis' => 'Conoce quiénes fueron, qué hazañas realizaron y qué características tenían los héroes venezolanos que lucharon en la Batalla de Carabobo; aprende cómo se organizaron para pelear y qué armas usaron.',
                'temporada_id' => 1,
                'nro_cap' => 7,
                'serie_id' => 2,
                'cover' => 'image/Lgh/LGH1_Cap7.webp',
                'video' => 'https://youtu.be/0UY_muyxB4M'
            ],
            [
                'name'=> 'La comunicación en la época independentista',
                'sub_name' => '',
                'sinopsis' => '¿Cómo, en 1800, se comunicaban los héroes venezolanos entre ellos? Descubre el significado de las cartas, las proclamas, los panfletos y los toques de tambores durante la gesta independentista.',
                'temporada_id' => 1,
                'nro_cap' => 8,
                'serie_id' => 2,
                'cover' => 'image/Lgh/LGH1_Cap8.webp',
                'video' => 'https://youtu.be/55cwezzyjaU'
            ],
            [
                'name'=> 'Pedro Camejo',
                'sub_name' => '',
                'sinopsis' => 'Los niños muestran sus conocimientos sobre la historia de Venezuela, hablan de sus héroes favoritos y del gusto que les da enseñar el pasado que forjó a esta gran nación suramericana. ',
                'temporada_id' => 1,
                'nro_cap' => 9,
                'serie_id' => 2,
                'cover' => 'image/Lgh/LGH1_Cap9.webp',
                'video' => 'https://youtu.be/HQnT6nV5moA'
            ],

            [
                'name'=> 'General José Antonio Páez',
                'sub_name' => '',
                'sinopsis' => 'El Armisticio de Trujillo',
                'temporada_id' => 1,
                'nro_cap' => 10,
                'serie_id' => 2,
                'cover' => 'image/Lgh/LGH1_Cap10.webp',
                'video' => 'https://youtu.be/d22r8SV5pdA'
            ],[
                'name'=> 'El Armisticio de Trujillo',
                'sub_name' => '',
                'sinopsis' => 'Infórmate sobre el Armisticio de Trujillo y sus implicaciones para la independencia. Descubre quiénes firmaron este pacto, las condiciones y su importancia en el derecho internacional humanitario.',
                'temporada_id' => 1,
                'nro_cap' => 11,
                'serie_id' => 2,
                'cover' => 'image/Lgh/LGH1_Cap11.webp',
                'video' => 'https://youtu.be/vZVy3_jzID0'
            ],
            [
                'name'=> 'Música y poesía en la lucha independestista',
                'sub_name' => '',
                'sinopsis' => 'Conoce el valor de la música y poesía durante la emancipación de Venezuela: significado de cada melodía y palabra en batalla, ¿qué canciones se hicieron?, ¿quiénes ayudaron a la causa con estas artes?',
                'temporada_id' => 1,
                'nro_cap' => 12,
                'serie_id' => 2,
                'cover' => 'image/Lgh/LGH1_Cap12.webp',
                'video' => 'https://youtu.be/HkFhxUu_On4'
            ],
            [
                'name'=> 'Gloriosa Batalla de Carabobo',
                'sub_name' => '',
                'sinopsis' => '<i>La Genial Historia</i> llega al Campo de Carabobo, donde se selló la libertad de Venezuela. Entérate de cómo los patriotas alcanzaron la victoria y conoce sobre la Batalla Naval del Lago de Maracaibo.',
                'temporada_id' => 1,
                'nro_cap' => 13,
                'serie_id' => 2,
                'cover' => 'image/Lgh/LGH1_Cap13.webp',
                'video' => 'https://youtu.be/8nDOxF7NPV0'
            ],

            //Conociendo a Venezuela
            [
                'name'=> 'Nuestra Venezuela',
                'sub_name' => '',
                'sinopsis' => 'Descubre las bondades que hacen de Venezuela un país único.',
                'temporada_id' => 1,
                'nro_cap' => 1,
                'serie_id' => 7,
                'cover' => 'image/conociendoVenezuela/CONOCIENDO A VENEZUELA.webp',
                'video' => 'https://youtu.be/byf9K4NRxIg'
            ],
            [
                'name'=> 'Estado Amazonas',
                'sub_name' => '',
                'sinopsis' => 'Te invitamos a conocer este estado indígena, ubicado al sur de nuestro país.',
                'temporada_id' => 1,
                'nro_cap' => 2,
                'serie_id' => 7,
                'cover' => 'image/conociendoVenezuela/CONOCIENDO A VENEZUELA AMAZONAS.webp',
                'video' => 'https://youtu.be/NoKWDTPhgzo'
            ],
            [
                'name'=> 'Estado Anzoátegui',
                'sub_name' => '',
                'sinopsis' => 'Entra y entérate de algunos platos típicos de esta entidad nororiental, que fue fundada en 1909.',
                'temporada_id' => 1,
                'nro_cap' => 3,
                'serie_id' => 7,
                'cover' => 'image/conociendoVenezuela/CONOCIENDO A VENEZUELA ANZOATEGUI.webp',
                'video' => 'https://youtu.be/RC__GSZmoEg'
            ],

            [
                'name'=> 'Estado Apure',
                'sub_name' => '',
                'sinopsis' => 'En este estado llanero podrás hacer turismo ecológico y disfrutar de la belleza que te ofrece su sabana tropical.',
                'temporada_id' => 1,
                'nro_cap' => 4,
                'serie_id' => 7,
                'cover' => 'image/conociendoVenezuela/CONOCIENDO A VENEZUELA APURE.webp',
                'video' => 'https://youtu.be/eC8fw9-skg0'
            ],
            [
                'name'=> 'Estado Aragua',
                'sub_name' => '',
                'sinopsis' => 'Esta región de la costa venezolana te regala hermosos paisajes naturales, y cuenta con una variedad de manifestaciones culturales, así como de artesanía y gastronomía.',
                'temporada_id' => 1,
                'nro_cap' => 5,
                'serie_id' => 7,
                'cover' => 'image/conociendoVenezuela/CONOCIENDO A VENEZUELA ARAGUA.webp',
                'video' => 'https://youtu.be/nGzCxYqPiMw'
            ],
            [
                'name'=> 'Estado Barinas',
                'sub_name' => '',
                'sinopsis' => 'Mira lo que te ofrece esta extensa tierra, mayormente llanera, en donde convergen sabanas, ríos y montañas.',
                'temporada_id' => 1,
                'nro_cap' => 6,
                'serie_id' => 7,
                'cover' => 'image/conociendoVenezuela/CONOCIENDO A VENEZUELA BARINAS.webp',
                'video' => 'https://youtu.be/H-Pc4fNVk1c'
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
