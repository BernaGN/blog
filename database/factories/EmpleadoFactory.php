<?php

namespace Database\Factories;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName($gender = null),
            'lastnameFather' => $this->faker->lastName(),
            'lastnameMother' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
