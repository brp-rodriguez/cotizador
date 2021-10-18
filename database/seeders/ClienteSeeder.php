<?php

namespace Database\Seeders;
use App\Models\Cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            'razon_social' => 'Agencia Maritima SAC',
            'ruc' => '12012322255',
            'nombre_corto' => 'Cosmos SAC',
            'contacto_nombre'=> 'Anthony Izquierdo',
            'contacto_correo'=> 'anthony.izquierdo@cosmos.com.pe',
            'contacto_celular'=>'902-122-433',
            'info_extra'=>null,
        ]);         
        Cliente::create([
            'razon_social' => 'Oiltanking SAC',
            'ruc' => '324531232222',
            'nombre_corto' => 'OTAS',
            'contacto_nombre'=> 'Lenin Moreno',
            'contacto_correo'=> 'lenin.moreno',
            'contacto_celular'=>'922-322-222',
            'info_extra'=>null,
        ]);         
    }
}
