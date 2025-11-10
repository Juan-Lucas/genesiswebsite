<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(3);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => fake()->paragraph(3),
            'content' => fake()->paragraphs(5, true),
            'features' => null,
            'icon' => '<path d="M12 2L2 7l10 5 10-5-10-5z"/>',
            'color' => fake()->randomElement(['rose', 'amber', 'emerald', 'sky', 'indigo', 'purple']),
            'image' => null,
            'published_at' => now(),
        ];
    }

    /**
     * Indicate that the service is unpublished.
     */
    public function unpublished(): static
    {
        return $this->state(fn (array $attributes) => [
            'published_at' => null,
        ]);
    }

    /**
     * Indicate that the service is published.
     */
    public function published(): static
    {
        return $this->state(fn (array $attributes) => [
            'published_at' => now(),
        ]);
    }
}
