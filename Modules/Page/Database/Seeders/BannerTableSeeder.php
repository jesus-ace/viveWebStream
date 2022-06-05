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
            ['name'=> 'Produccion 1', 'image' => '/image/Banner_1920x1080px.jpg', 'sinopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam facilis deleniti ipsam architecto, aut quas? Error, aperiam labore unde ullam blanditiis corporis velit rerum! Corporis aliquam sunt animi porro ad!', 'trailer' =>'no'],
            ['name'=> 'Produccion 2', 'image' => '/image/Banner_1920x1080px.jpg', 'sinopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam facilis deleniti ipsam architecto, aut quas? Error, aperiam labore unde ullam blanditiis corporis velit rerum! Corporis aliquam sunt animi porro ad!', 'trailer' =>'no']
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
