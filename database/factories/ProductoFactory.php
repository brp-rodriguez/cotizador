<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {                
        $nombre_generado = $this->faker->name();
        $precio_sin_igv = $this->faker->randomFloat(2,20,30);
        $precio_con_igv = $precio_sin_igv*1.18;
        return [            
            'nombre' => $nombre_generado,
            'slug' => Str::slug($nombre_generado),
            'tipo'=>$this->faker->randomElement(['servicio','producto']),
            'descripcion' => $this->faker->text(),
            'precio_venta_sin_igv' => $precio_sin_igv,
            'precio_venta_con_igv'=>$precio_con_igv,
        ];
    }
}
