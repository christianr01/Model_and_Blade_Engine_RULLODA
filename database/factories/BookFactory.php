<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model for the factory.
     *
     * @return string
     */
    public function model()
    {
        return Book::class;
    }

    /**
     * Define the fields and the default values.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'isbn' => $this->faker->isbn13,
            'title' => $this->faker->sentence,
            'author' => $this->faker->name,
            'description' => $this->faker->paragraph,
            'date_published' => $this->faker->date,
        ];
    }
}

