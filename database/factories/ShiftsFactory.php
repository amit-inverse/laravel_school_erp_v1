<?php

namespace Database\Factories;

use App\Models\Shifts;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShiftsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shifts::class;

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
        'shift' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
