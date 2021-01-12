<?php

namespace Database\Factories;

use App\Models\Place;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlaceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Place::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'user_id' => function () {
                return User::factory()->create()->id;
            },
            'title' => $this->faker->sentence(),
            'description' => $this->faker->text,
            'available_on' => now(),
        ];
    }


    /**
     * Indicate the place is published.
     *
     * @return PlaceFactory
     */
    public function published(): PlaceFactory
    {
        return $this->state(function () {
            return [
                'published_at' => Carbon::parse('-1week')
            ];
        });
    }

    /**
     * Indicate the place is unpublished.
     *
     * @return PlaceFactory
     */
    public function unpublished(): PlaceFactory
    {
        return $this->state(function () {
            return [
                'published_at' => null
            ];
        });
    }
}
