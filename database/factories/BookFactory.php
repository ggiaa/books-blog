<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'writer_id' => mt_rand(1, 5),
            'title' => $this->faker->sentence(mt_rand(1, 5)),
            'slug' => $this->faker->slug(),
            'author' => $this->faker->company(),
            'total_pages' => $this->faker->numberBetween(100, 600),
            'publish_year' => $this->faker->year(),
            'price' => $this->faker->numberBetween(30, 200) . '000',
            'excerpt' => $this->faker->paragraph(1, 2),
            'synopsis' => $this->faker->paragraph(mt_rand(5, 9))
        ];
    }
}
