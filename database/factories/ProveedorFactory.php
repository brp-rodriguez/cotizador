<?php

namespace Database\Factories;

use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProveedorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Proveedor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       
        return [            
            'nombre_comercial'=>$this->faker->company(),
            'nombre_corto'=>$this->faker->companySuffix(),
            'ruc'=>$this->faker->numerify('###########'),
            'direccion'=>$this->faker->address(),
            'descripcion_horario'=>$this->faker->randomElement(['L-V 7:00-18:00','L-V 7:00-18:00 | S 7:00-17:00','24 horas / 7 dias','Solo fines de semanas','Domingos All Day']),
            'descripcion_forma_envio'=>$this->faker->randomElement(['MARVISUR','FLORES','SOYUS','MAYCA','JACKSA']),
            'telefono_1'=>$this->faker->numerify('######'),
            'telefono_2'=>$this->faker->numerify('######'),
            'telefono_3'=>$this->faker->numerify('######'),
            'celular_1'=>$this->faker->numerify('9##-###-###'),
            'celular_2'=>$this->faker->numerify('9##-###-###'),
            'celular_3'=>$this->faker->numerify('9##-###-###'),
        ];
    }
}
