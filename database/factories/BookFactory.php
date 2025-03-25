<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'genre' => fake()->randomElement([
                'Fiction',
                'Non-Fiction',
                'Fantasy',
                'Science Fiction',
                'Mystery',
                'Thriller',
                'Romance',
                'Horror',
                'Historical Fiction',
                'Young Adult',
                'Biography',
                'Self-Help',
                'Business',
                'Science',
                'Technology',
                'Philosophy',
                'History',
                'Psychology'
            ]),
            'description' => fake()->paragraph(10),
            'isbn' => fake()->numerify('978-##########'),
            'pages' => fake()->numberBetween(20, 500),
            'author_id' => Author::inRandomOrder()->first()->id,
        ];
    }
}
