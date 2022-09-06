<?php

namespace Database\Factories;

use App\Models\Days;
use Illuminate\Database\Eloquent\Factories\Factory;

class DaysFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Days::class;

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
        'name' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
