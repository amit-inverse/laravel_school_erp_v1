<?php

namespace Database\Factories;

use App\Models\Faculties;
use Illuminate\Database\Eloquent\Factories\Factory;

class FacultiesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Faculties::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'faculty_name' => $this->faker->word,
        'faculty_code' => $this->faker->word,
        'faculty_description' => $this->faker->text,
        'faculty_status' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
