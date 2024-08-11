<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    protected $model = Teacher::class;
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
            'previous_experience' => $this->faker->numberBetween(1,40), 
            'comments' => $this->faker->sentence(), 
            'joined_at' => $this->faker->date('Y-m-d','now')
        ];
    }
}
