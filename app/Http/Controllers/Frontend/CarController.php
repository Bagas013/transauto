<?php

namespace App\Http\Controllers\Frontend;

use App\Models\car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::paginate(3);

        return view('frontend.car', compact('cars'));
    }

    public function show(Car $car)
    {
        $related_cars = Car::get();

        return view('frontend.detail', compact('car','related_cars'));
    }
}

