<?php

namespace Database\Factories;

use App\Models\ClassAssignings;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClassAssigningsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClassAssignings::class;

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
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
