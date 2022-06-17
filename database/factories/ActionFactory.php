<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\Action;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Action>
 */
class ActionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'siomid'    =>$this->faker->numberBetween($min = 10000, $max = 99999),
            'username'  =>$this->faker->userName(),
            'detalle'   =>$this->faker->paragraph(),
        ];
    }
}
