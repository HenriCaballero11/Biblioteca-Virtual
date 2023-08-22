<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Moldels\Libro;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            /*
             $table->string('titulo');
            $table->string('autor');
            $table->string('editorial');
            $table->year('año_publicación');
            $table->string('cantidad_disponible');
            $table->timestamps();
            */ 

        'titulo'=>fake()->name(),
        'autor'=>fake()->name(),
        'editorial'=>fake()->name(),
        'anio_publicacion'=>fake()->year(),
        'cantidad_disponible'=>fake()->numberBetween(0, 100)

        ];
    }
}
