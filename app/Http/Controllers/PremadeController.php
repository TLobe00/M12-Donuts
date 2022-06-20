<?php

namespace App\Http\Controllers;

use App\Models\Donut;

class PremadeController extends Controller
{
    public function index()
    {
        return inertia('Premade', [
            'donuts' => Donut::all()->toArray()
        ]);
    }
}
