<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobOffer>
 */
class JobOfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'recruteur_profile_id' => fake()->numberBetween(1),
            'entreprise' => fake()->name(),
            'contrat' => fake()->name(),
            'titre' => fake()->name(),
            'description' => Str::random(10),
            'image'=>fake()->name(),
            'status'=>'open'
        ];
    }
}
