<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'razon_social'=>$this->faker->company(),
            'ruc'=>$this->faker->numerify('###########'),
            'nombre_corto'=>$this->faker->companySuffix(),
            'contacto_nombre'=>$this->faker->name(),
            'contacto_correo'=>$this->faker->email(),
            'contacto_celular'=>$this->faker->numerify('9##-###-###'),
        ];
    }
}
