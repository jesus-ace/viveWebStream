<?php

namespace Modules\Page\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Page\Entities\Banner;

class BannerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Model::unguard();
          $baners =[
            ['name'=> 'Párate ahí', 'image' => '/image/PA_BannerWEB.webp', 
            'sinopsis' => '¿Quieres saber qué lugares puedes visitar en la Gran Caracas? Acompaña a Cleidy en su recorrido y descubre sitios maravillosos.', 
            'trailer' =>'no'],
            ['name'=> 'Cine corto', 'image' => '/image/CC_BannerWeb.webp', 'sinopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam facilis deleniti ipsam architecto, aut quas? Error, aperiam labore unde ullam blanditiis corporis velit rerum! Corporis aliquam sunt animi porro ad!', 'trailer' =>'no']
          ];

          foreach ($baners as $key => $banner) {
             $new_banner = new Banner();
             $new_banner->name = $banner['name'];
             $new_banner->image = $banner['image'];
             $new_banner->sinopsis = $banner['sinopsis'];
             $new_banner->trailer = $banner['trailer'];
             $new_banner->save();

          }
        // $this->call("OthersTableSeeder");
    }
}
