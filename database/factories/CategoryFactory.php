<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        return [
            'user_id' => static::$count = (static::$count ?? 0) + 1,
            'name' => $this->faker->word(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}