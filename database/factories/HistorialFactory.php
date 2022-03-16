<?php

namespace Database\Factories;

use App\Models\Historial;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Historial>
 */
class HistorialFactory extends Factory
{

    /**
     *  The name of the factory's corresponding model
     * 
     * @var string
     */
    protected $model = Historial::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(), 
            'apellido' => $this->faker->randomElement(['1','2','3']), 
            'descripcion' => $this->faker->paragraph()
        ];
    }
}
