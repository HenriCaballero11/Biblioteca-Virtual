<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Moldels\Prestamo;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prestamo>
 */
class PrestamoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            /*
             $table->datetime('fecha_solicitud');
            $table->datetime('fecha_prestamo');
            $table->datetime('fecha_devolución');
            $table->unsignedBigInteger('libro_id');
            $table->unsignedBigInteger('usuario_id');
            */

        'fecha_solicitud'=>fake()->numerify('########'),
        'fecha_prestamo'=>fake()->numerify('########'),
        'fecha_devolucion'=>fake()->numerify('########'),
        'libro_id'=>fake()->numberBetween(0, 100),
        'usuario_id'=>fake()->numberBetween(0, 100)



        ];
    }
}
