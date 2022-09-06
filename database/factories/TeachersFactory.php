<?php

namespace Database\Factories;

use App\Models\Teachers;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeachersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teachers::class;

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
        'first_name' => $this->faker->word,
        'last_name' => $this->faker->word,
        'gender' => $this->faker->word,
        'dob' => $this->faker->word,
        'email' => $this->faker->word,
        'phone' => $this->faker->word,
        'address' => $this->faker->text,
        'current_address' => $this->faker->text,
        'nationality' => $this->faker->word,
        'status' => $this->faker->word,
        'date_registered' => $this->faker->word,
        'user_id' => $this->faker->randomDigitNotNull,
        'image' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
