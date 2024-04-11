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

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'hex' => 'required|string',
        ]);

        try {
            $color = Color::create($validatedData);
            return response()->json(['message' => 'Color created successfully', 'color' => $color], 201);
        } catch (\Exception $error) {
            return response()->json(['error' => 'Failed to create color', 'message' => $error->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        $color = Color::find($id);

        if (!$color) {
            return response()->json(['error' => 'Color not found'], 404);
        }

        $color->delete();

        return response()->json(['message' => 'Color deleted successfully'], 200);
    }
}
