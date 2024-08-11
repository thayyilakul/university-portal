<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    protected $model = Student::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(), 
            'age' => $this->faker->numberBetween(25,60), 
            'teacher_id' => Teacher::inRandomOrder()->first()->id, 
            'class' => $this->faker->randomElement(['MSc CS','MSc IT','B Com','BSc CS', 'BSc IT']),
            'admission_date' => $this->faker->date('Y-m-d','now'),
            'yearly_fees' => $this->faker->randomNumber(5, true)
        ];
    }
}
