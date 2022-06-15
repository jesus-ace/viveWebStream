<?php

namespace Modules\Page\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Page\Entities\Categoria;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Model::unguard();
        $categorys =[
            ['name'=> 'Entretenimineto'],
            ['name'=> 'Familiar'],
            ['name'=> 'Infantiles'],
            ['name'=> 'Verticales']
        ];

        foreach ($categorys as $key => $category) {
            $new_category = new Categoria();
            $new_category->name = $category['name'];
            $new_category->save();

        }
        // $this->call("OthersTableSeeder");
    }
}
