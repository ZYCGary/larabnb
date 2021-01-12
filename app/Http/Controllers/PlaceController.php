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
        $places = Place::all();

        return Inertia::render('Place/Index', [
            'places' => $places
        ]);
    }
}
