<?php

namespace Tests\Feature\Place;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewPlacesTest extends TestCase
{
    public function test_user_can_view_places()
    {
        $response = $this->get(route('places.index'));

        $response->assertStatus(200);
    }
}
