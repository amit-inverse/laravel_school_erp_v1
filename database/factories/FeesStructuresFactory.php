<?php

namespace Database\Factories;

use App\Models\FeesStructures;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeesStructuresFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FeesStructures::class;

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
        'admission_fees' => $this->faker->randomDigitNotNull,
        'semester_fees' => $this->faker->randomDigitNotNull,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
