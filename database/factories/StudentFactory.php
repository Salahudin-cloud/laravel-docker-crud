<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_number' => 'STD-' . $this->faker->unique()->numerify(str_repeat('#', 16)),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'gender' => $this->faker->randomElement(['MALE', 'FEMALE']),
            'email' => $this->faker->unique()->safeEmail(),
            'phone_number' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'enrollment_year' => (string)$this->faker->numberBetween(2021, 2025),
            'date_of_birth' => $this->faker->date(),
            'department_id' => Department::inRandomOrder()->first()->id,
        ];
    }
}
