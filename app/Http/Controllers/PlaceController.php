<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class PlaceController extends Controller
{
    public function index(): Response
    {
        $data = [];

        $places = Place::all();

        foreach ($places as $place) {
            $data[] = [
                'title' => $place->title,
                'user' => $place->user->name,
                'rental_type' => $place->rentalType->name,
                'available_on' => $place->available_on,
                'rent' => $place->rent
            ];
        }

        return Inertia::render('Place/Index', [
            'places' => $data
        ]);
    }
}
