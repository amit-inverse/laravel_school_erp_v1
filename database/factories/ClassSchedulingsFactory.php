<?php

namespace Database\Factories;

use App\Models\ClassSchedulings;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClassSchedulingsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClassSchedulings::class;

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
        'course_id' => $this->faker->randomDigitNotNull,
        'level_id' => $this->faker->randomDigitNotNull,
        'shift_id' => $this->faker->randomDigitNotNull,
        'classroom_id' => $this->faker->randomDigitNotNull,
        'batch_id' => $this->faker->randomDigitNotNull,
        'day_id' => $this->faker->randomDigitNotNull,
        'time_id' => $this->faker->randomDigitNotNull,
        'teacher_id' => $this->faker->randomDigitNotNull,
        'start_time' => $this->faker->word,
        'end_time' => $this->faker->word,
        'status' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
