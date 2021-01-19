<?php

namespace Database\Factories;

use App\Models\Property;
use App\Models\RentalType;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Property::class;

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
            'rent' => $this->faker->numberBetween(200, 1000),
            'rental_type_id' => rand(1, 5)
        ];
    }


    /**
     * Indicate the place is published.
     *
     * @return PropertyFactory
     */
    public function published(): PropertyFactory
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
     * @return PropertyFactory
     */
    public function unpublished(): PropertyFactory
    {
        return $this->state(function () {
            return [
                'published_at' => null
            ];
        });
    }
}
