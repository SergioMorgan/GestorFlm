<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\Osticket;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Osticket>
 */
class OsticketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // especificar todos los campos que tiene la tabla

            'siomid'    =>$this->faker->unique()->numberBetween($min = 10000, $max = 99999),
            'localid'   =>$this->faker->numberBetween($min = 100, $max = 999),
            'estado'    =>$this->faker->randomElement(['CERRADO', 'PENDIENTE', 'ANULADO', 'RECHAZADO']),
            'tipo'      =>$this->faker->randomElement(['RADIO', 'ENERGIA', 'TRANSPORTE']),
            'fechaasignacion' =>$this->faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = null),
            // 'fechallegada',
            // 'fechacierre',
            // 'codigoremedy',
            'descripcion'   =>$this->faker->sentence(),
            // 'ciere',
            // 'iniciopr1',
            // 'finpr1',
            // 'motivopr1',
            // 'sustentopr1',
            // 'iniciopr2',
            // 'finpr2',
            // 'motivopr2',
            // 'sustentopr2',
            // 'iniciopr3',
            // 'finpr3',
            // 'motivopr3',
            // 'sustentopr3',
            // 'iniciopr4',
            // 'finpr4',
            // 'motivopr4',
            // 'sustentopr4',
        ];
    }
}
