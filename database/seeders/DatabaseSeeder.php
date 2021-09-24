<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Material::factory(30)->create();
        \App\Models\Proveedor::factory(25)->create();
        \App\Models\Producto::factory(10)->create();
    }
}
