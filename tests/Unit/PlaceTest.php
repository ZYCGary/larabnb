<?php

namespace Tests\Unit;

use App\Models\Place;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PlaceTest extends TestCase
{
    public function test_a_place_belongs_to_a_user()
    {
        $place = create(Place::class);

        $this->assertInstanceOf('Illuminate\Database\Eloquent\Relations\BelongsTo', $place->user());
        $this->assertInstanceOf('App\Models\User', $place->user);
    }

    public function test_a_place_belongs_to_a_rental_type()
    {
        $place = create(Place::class);

        $this->assertInstanceOf('Illuminate\Database\Eloquent\Relations\BelongsTo', $place->rentalType());
        $this->assertInstanceOf('App\Models\RentalType', $place->rentalType);
    }
}
