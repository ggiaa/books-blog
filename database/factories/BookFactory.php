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
            'genre_id' => mt_rand(1, 21),
            'writer_id' => mt_rand(1, 5),
            'publisher_id' => mt_rand(1, 5),
            'title' => $this->faker->sentence(mt_rand(1, 5)),
            'slug' => $this->faker->slug(),
            'total_pages' => $this->faker->numberBetween(100, 600),
            'publish_year' => $this->faker->dateTime(),
            'price' => $this->faker->numberBetween(30, 200) . '000',
            'excerpt' => $this->faker->paragraph(1, 2),
            'synopsis' => $this->faker->paragraph(mt_rand(5, 9))
        ];
    }
}
