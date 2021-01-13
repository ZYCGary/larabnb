<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        $publishedAt = [now(), null];

        foreach (range(1, 100) as $item) {
            $place = Property::factory()->make([
                'user_id' => rand(1, 10)
            ]);

            $data[] = [
                'user_id' => $place->user_id,
                'title' => $place->title,
                'description' => $place->description,
                'available_on' => $place->available_on,
                'rent' => $place->rent,
                'rental_type_id' => rand(1, 5),
                'published_at' => $publishedAt[array_rand($publishedAt, 1)],
            ];
        }

        Property::insert($data);
    }
}
