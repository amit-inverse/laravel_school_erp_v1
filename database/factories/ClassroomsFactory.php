<?php

namespace Database\Factories;

use App\Models\Classrooms;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClassroomsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Classrooms::class;

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
        'classroom_name' => $this->faker->word,
        'classroom_code' => $this->faker->word,
        'classroom_description' => $this->faker->text,
        'classroom_status' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
