<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Moldels\Usuario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
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
             $table->string('nombre');
            $table->string('correo_electronico');
            $table->string('telefono');
            $table->string('direccion');
            */ 

                'nombre'=>fake()->name(),
                'correo_electronico'=>fake()->Email(),
                'telefono'=>fake()->numerify('########'),
                'direccion'=>fake()->city()
                

        ];
    }
}
