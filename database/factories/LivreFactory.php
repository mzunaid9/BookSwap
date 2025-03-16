<?php

namespace Database\Factories;

use App\Models\livre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\livre>
 */
class LivreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = livre::class;
    public function definition(): array
    {
        return [
            'titre' => $this->faker->sentence(3), // Génère un titre de 3 mots
            'auteur' => $this->faker->name, // Génère un nom d'auteur
            'description' => $this->faker->paragraph, // Génère un paragraphe de description
        ];
    }
}
