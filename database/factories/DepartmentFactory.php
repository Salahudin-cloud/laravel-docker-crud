<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    // The correct code
    public function definition(): array
    {
        return [
            'code' => 'JRSN-' . str_pad($this->faker->numberBetween(0, 99999), 5, '0', STR_PAD_LEFT),
            'name' => 'Jurusan ' . ucfirst($this->faker->word()), // ✅ ADD PARENTHESES
            'head' => $this->faker->name(), // ✅ ADD PARENTHESES
        ];
    }
}
