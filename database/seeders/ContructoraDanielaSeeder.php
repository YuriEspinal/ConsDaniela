<?php

namespace Database\Seeders;

use App\Models\constructora;
use App\Models\contratista;
use App\Models\empleado;
use Illuminate\Database\Seeder;

class ContructoraDanielaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        empleado::factory(1000)->create();
        constructora::factory(1000)->create();
        contratista::factory(1000)->create();
    }
}
