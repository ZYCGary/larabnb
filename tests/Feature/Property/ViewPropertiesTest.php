<?php

namespace Tests\Feature\Property;

use App\Models\Property;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewPropertiesTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_view_properties()
    {
        create(Property::class, [], 10);

        $response = $this->get(route('properties.index'));

        $response->assertStatus(200);
    }

    public function test_user_can_only_view_published_properties()
    {
        $publishedProperty = Property::factory()->published()->create();
        $unpublishedProperty = Property::factory()->unpublished()->create();

        $response = $this->get(route('properties.index'));

        $response->assertStatus(200);

        $response->assertSee($publishedProperty->rent);
        $response->assertDontSee($unpublishedProperty->rent);
    }

    public function test_user_can_view_a_single_property()
    {
        $property = create(Property::class);

        $response = $this->get(route('properties.show', ['propertyId' => $property->id]));

        $response->assertStatus(200);

        $response->assertSee($property->title);
    }

    public function test_user_can_only_view_a_published_property()
    {
        $publishedProperty = Property::factory()->published()->create();
        $unpublishedProperty = Property::factory()->unpublished()->create();

        $response = $this->get(route('properties.show', ['propertyId' => $publishedProperty->id]));

        $response->assertStatus(200);

        $response->assertSee($publishedProperty->title);

        $response = $this->get(route('properties.show', ['propertyId' => $unpublishedProperty->id]));

        $response->assertStatus(404);
    }
}
