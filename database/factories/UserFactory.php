<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'national_id' => rand(1000000000, 9999999999),
            'name' => $this->faker->name,
            'family' => $this->faker->name,
            'city_id' => rand(1, 200),
            'school_id' => rand(1, 5000),
            'gender' => rand(0, 1),
            'token' => Str::random(60),
        ];
    }
}
