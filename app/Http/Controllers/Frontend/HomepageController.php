<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    public function index()
    {
        $cars = Car::latest()->get();

        return view('frontend.homepage', compact('cars'));
    }
}

