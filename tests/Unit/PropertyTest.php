<?php

namespace Tests\Unit;

use App\Models\Property;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PropertyTest extends TestCase
{
    public function test_a_property_belongs_to_a_user()
    {
        $place = create(Property::class);

        $this->assertInstanceOf('Illuminate\Database\Eloquent\Relations\BelongsTo', $place->user());
        $this->assertInstanceOf('App\Models\User', $place->user);
    }

    public function test_a_place_belongs_to_a_rental_type()
    {
        $place = create(Property::class);

        $this->assertInstanceOf('Illuminate\Database\Eloquent\Relations\BelongsTo', $place->rentalType());
        $this->assertInstanceOf('App\Models\RentalType', $place->rentalType);
    }

    public function test_properties_with_published_at_date_are_published()
    {
        $publishedProperty1= Property::factory()->published()->create();
        $publishedProperty2= Property::factory()->published()->create();
        $unpublishedProperty= Property::factory()->unpublished()->create();

        $publishedProperties = Property::published()->get();

        $this->assertTrue($publishedProperties->contains($publishedProperty1));
        $this->assertTrue($publishedProperties->contains($publishedProperty2));
        $this->assertfalse($publishedProperties->contains($unpublishedProperty));
    }
}
