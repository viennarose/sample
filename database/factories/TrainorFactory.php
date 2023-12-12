<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Trainor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trainor>
 */
class TrainorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $trainor = [
            "Piano",
            "Guitar",
            "Voice",
            "Violin",
            "Drums",
            "Flute",
            "Saxophone",
            "Trumpet",
            "Cello",
            "Bass Guitar",
            "Clarinet",
            "Harp",
            "Banjo",
            "Mandolin",
            "Accordion",
            "Trombone",
            "Double Bass",
            "Oboe",
            "French Horn",
          ];
        return [
            'user_id' => fake()->randomElement(User::pluck('id')),
            'specialty' => fake()->word()
        ];
    }
}
