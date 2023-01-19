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
    public function definition()
    {
        return [
          'title' => fake()->sentence(1),
          'description' => fake()->paragraph(4),
          'user_id' => null,
          'localisation' => fake()->address(),
          'price' => rand(5000, 200000),
          'itinerary' => fake()->localCoordinates(),
          'available_space' => 100,
          'event_at' => fake()->dateTime(),
          'image' => fake()->imageUrl(100, 100),
          'contact' => '0155897488'
        ];
    }
}
