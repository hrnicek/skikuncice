<?php

namespace Database\Factories;

use App\Models\Accommodation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Accommodation>
 */
class AccommodationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company().' '.$this->faker->randomElement(['Hotel', 'Pension', 'Chata', 'Apartmány']),
            'address' => $this->faker->streetAddress().', '.$this->faker->city().', '.$this->faker->postcode(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'phone2' => $this->faker->optional(0.3)->phoneNumber(),
            'website' => $this->faker->optional(0.7)->url(),
            'content' => $this->faker->paragraphs(3, true),
            'is_available' => $this->faker->boolean(90), // 90% chance of being available
        ];
    }

    /**
     * Configure the model factory.
     */
    public function configure(): static
    {
        return $this->afterCreating(function (Accommodation $accommodation) {
            // Create a simple test image file
            $imagePath = storage_path('app/public/test-accommodation-'.$accommodation->id.'.jpg');
            $dummyImage = base64_decode('/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQH/2wBDAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQH/wAARCAABAAEDASIAAhEBAxEB/8QAFQABAQAAAAAAAAAAAAAAAAAAAAv/xAAUEAEAAAAAAAAAAAAAAAAAAAAA/8QAFQEBAQAAAAAAAAAAAAAAAAAAAAX/xAAUEQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIRAxEAPwA/AB//2Q==');
            file_put_contents($imagePath, $dummyImage);

            // Add main image
            $accommodation->addMedia($imagePath)
                ->usingName('Hlavní obrázek')
                ->usingFileName('accommodation-main-'.$accommodation->id.'.jpg')
                ->toMediaCollection('images');

            // Add additional images (2-5 random images)
            $imageCount = $this->faker->numberBetween(2, 5);
            for ($i = 0; $i < $imageCount; $i++) {
                $additionalImagePath = storage_path('app/public/test-accommodation-'.$accommodation->id.'-'.$i.'.jpg');
                file_put_contents($additionalImagePath, $dummyImage);

                $accommodation->addMedia($additionalImagePath)
                    ->usingName('Obrázek '.($i + 2))
                    ->usingFileName('accommodation-'.$accommodation->id.'-'.$i.'.jpg')
                    ->toMediaCollection('images');

                // Clean up temporary file
                if (file_exists($additionalImagePath)) {
                    unlink($additionalImagePath);
                }
            }

            // Clean up main temporary file
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        });
    }

    /**
     * Indicate that the accommodation is available.
     */
    public function available(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_available' => true,
        ]);
    }

    /**
     * Indicate that the accommodation is not available.
     */
    public function unavailable(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_available' => false,
        ]);
    }

    /**
     * Create an accommodation with a specific name.
     */
    public function named(string $name): static
    {
        return $this->state(fn (array $attributes) => [
            'name' => $name,
        ]);
    }
}
