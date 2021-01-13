<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class PropertyController extends Controller
{
    public function index(): Response
    {
        $data = [];

        $properties = Property::all();

        foreach ($properties as $property) {
            $data[] = [
                'title' => $property->title,
                'user' => $property->user->name,
                'rental_type' => $property->rentalType->name,
                'available_on' => $property->available_on,
                'rent' => $property->rent
            ];
        }

        return Inertia::render('Property/Index', [
            'properties' => $data
        ]);
    }
}
