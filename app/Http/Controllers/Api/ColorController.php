<?php

namespace App\Http\Controllers\Api;

use App\Models\Color;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        return Color::all();
    }
}
