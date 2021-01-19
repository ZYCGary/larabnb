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

        $properties = Property::published()->get();

        foreach ($properties as $property) {
            $data[] = [
                'id' => $property->id,
                'title' => $property->title,
                'rental_type' => $property->rentalType->name,
                'available_on' => $property->available_on,
                'rent' => $property->rent,
                'user' => [
                    'name' => $property->user->name,
                ]
            ];
        }

        return Inertia::render('Property/Index', [
            'properties' => $data
        ]);
    }

    public function show(int $propertyId): Response
    {
        $property = Property::published()->findOrFail($propertyId);

        $data = [
            'id' => $property->id,
            'title' => $property->title,
            'description' => $property->description,
            'rental_type' => $property->rentalType->name,
            'available_on' => $property->available_on,
            'rent' => $property->rent,
            'user' => [
                'name' => $property->user->name,
            ]
        ];

        return Inertia::render('Property/Show', [
            'property' => $data
        ]);
    }
}
