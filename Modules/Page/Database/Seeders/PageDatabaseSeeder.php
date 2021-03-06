<?php

namespace Modules\Page\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PageDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(BannerTableSeeder::class);
        $this->call(TemporadaTableSeeder::class);
        $this->call(CategoriaTableSeeder::class);
        $this->call(SerieTableSeeder::class);
        $this->call(CapitulosTableSeeder::class);
        // $this->call("OthersTableSeeder");
    }
}
