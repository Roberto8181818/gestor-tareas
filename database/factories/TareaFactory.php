<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tarea;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tarea>
 */
class TareaFactory extends Factory
{

    protected $model = Tarea::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'nombre' => $this->faker->sentence(),
            'descripcion' => $this->faker->paragraph(),
            'categoria' => $this->faker->randomElement(['Urgente','Fácil','Puede esperar','Difícil','Vencida']) ,
            'plazo' => $this->faker->sentence(1)
        ];
    }
}
