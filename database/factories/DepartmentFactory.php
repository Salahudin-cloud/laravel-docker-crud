<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => 'JRSN-' . str_pad($this->faker->numberBetween(0, 99999), 5, '0', STR_PAD_LEFT),
            'name' => 'Jurusan ' . ucfirst($this->faker->word()),
            'head' => $this->faker->name(100),
        ];
    }
}
