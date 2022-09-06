<?php

namespace Database\Factories;

use App\Models\Attendances;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttendancesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Attendances::class;

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
        'student_id' => $this->faker->randomDigitNotNull,
        'class_id' => $this->faker->randomDigitNotNull,
        'subject_id' => $this->faker->randomDigitNotNull,
        'teacher_id' => $this->faker->randomDigitNotNull,
        'attendance_status' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
