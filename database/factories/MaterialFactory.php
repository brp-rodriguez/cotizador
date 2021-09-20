<?php

namespace Database\Factories;

use App\Models\Material;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class MaterialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Material::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nombre_material =  $this->faker->jobTitle();
        return [
            'nombre'=>$nombre_material,
            'slug'=>Str::slug($nombre_material,'-'),
            'unidad'=>$this->faker->randomElement(['m','unid','L','Kg']),
            'nombre_unidad'=>$this->faker->randomElement(['metro','cono','unidad','Kg']),
            'descripcion'=>$this->faker->paragraph(),        
            'foto'=>$this->faker->randomElement(['foto 1','foto 2','foto 3','foto 4']),         
            'precio_compra'=>$this->faker->randomFloat(2,10,20),
            'precio_venta'=>$this->faker->randomFloat(2,10,20),
            'lugar_compra'=>$this->faker->name(),
        ];
    }
}
