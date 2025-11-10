<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dateFrom = fake()->dateTimeBetween('now', '+1 year');

        return [
            'title' => fake()->sentence(3),
            'perex' => fake()->optional(0.8)->paragraph(),
            'date_from' => $dateFrom,
            'date_to' => fake()->dateTimeBetween($dateFrom, $dateFrom->format('Y-m-d H:i:s').' +7 days'),
            'published' => fake()->boolean(70), // 70% chance of being published
            'content' => fake()->paragraphs(5, true),
            'note' => fake()->optional(0.8)->paragraph(),
        ];
    }
}
