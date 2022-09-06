<?php

namespace Database\Factories;

use App\Models\Levels;
use Illuminate\Database\Eloquent\Factories\Factory;

class LevelsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Levels::class;

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
        'level' => $this->faker->word,
        'course_id' => $this->faker->randomDigitNotNull,
        'level_description' => $this->faker->text,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
